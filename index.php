<?PHP
	// show errors
	ini_set('display_errors', 1); error_reporting(E_ALL);
	// set locale
	setlocale(LC_ALL, "da_DK.UTF-8", "Danish_Denmark.1252", "danish_denmark", "danish", "dk_DK@euro");
	ini_set("date.timezone", "Europe/Copenhagen");
	// set $page
	$page = ($_GET['page'] == "") ? "dashboard" : $_GET['page'];
	// set session
	@session_start();
	// send user to login if not logged in
	/*if ($page != "login" && !isset($_SESSION['userData'])) {
		header("Location: /login");
	}
	if ($page == "login" && isset($_SESSION['userData'])) {
		header("Location: /dashboard");
	}*/
	// include language
	if (!isset($_SESSION['language'])) {
		include("languages/da_dk.php");
	} else {
		include("languages/".$_SESSION['language'].".php");
	}
	// require site settings
	require("engine/functions/getSettings.php");
	if ($page != "login" && $settings["locked"] == 1 && !isset($_SESSION['userData'])) {
		header("Location: /login");
	}
	if (isset($_SESSION['userData'])) {
		require("engine/classes/user.php");
		$user = new FDK_User;
		$user = (object) json_decode(json_encode($user->getUser(53)));
		print_r($user);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../images/favicon.ico">
		<title><?PHP echo $settings["title"]; ?></title>
		<!-- Bootstrap 4.0-->
		<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
		<!-- Bootstrap-extend -->
		<link rel="stylesheet" href="/css/bootstrap-extend.css">
		<!-- theme style -->
		<link rel="stylesheet" href="/css/master_style.css">
		<!-- Crypto_Admin skins -->
		<link rel="stylesheet" href="/css/skins/_all-skins.css">
		<?PHP
			// if $page has own css file, load it
			if (file_exists("pages/".$page."/css/index.css")) {
		?>
		<script src="/pages/<?PHP echo $page; ?>/css/index.css"></script>
		<?PHP
			}
		?>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery 3 -->
		<script src="/assets/vendor_components/jquery/dist/jquery.js"></script>
		<!-- popper -->
		<script src="/assets/vendor_components/popper/dist/popper.min.js"></script>
		<!-- Bootstrap 4.0-->
		<script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
		<!-- Slimscroll -->
		<script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
		<!-- FastClick -->
		<script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script>
		<!-- Crypto_Admin App -->
		<script src="/js/template.js"></script>
		<?PHP
			// if $page has own js file, load it
			if (file_exists("pages/".$page."/js/index.js")) {
		?>
		<script src="/pages/<?PHP echo $page; ?>/js/index.js"></script>
		<?PHP
			}
		?>
	</head>
	<?PHP
		if ($page == "login") {
			include("login.php");
		} else {
	?>
	<body class="hold-transition skin-yellow sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<?PHP
					include("html/header.php");
				?>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<?PHP
					include("html/sidebar.php");
				?>
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Main content -->
				<section class="content">
				<?PHP
					// if $page exists then include it, else include 404
					if (file_exists("pages/".$page."/index.php")) {
						include("pages/".$page."/index.php");
					} else {
						include("pages/error/404.php");
					}
				?>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
		</div>
		<!-- ./wrapper -->
	</body>
	<?PHP
		}
	?>
</html>