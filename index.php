<?PHP
	// show errors
	ini_set('display_errors', 1); error_reporting(E_ALL);
	// set session
	@session_start();
	// set locale
	setlocale(LC_ALL, "da_DK.UTF-8", "Danish_Denmark.1252", "danish_denmark", "danish", "dk_DK@euro");
	ini_set("date.timezone", "Europe/Copenhagen");
	if (!isset($_SESSION['language'])) {
		include("languages/da_dk.php");
	} else {
		include("languages/".$_SESSION['language'].".php");
	}
	$page = ($_GET['page'] == "") ? "dashboard" : $_GET['page'];
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
		<title>Thornament</title>
		<!-- Bootstrap 4.0-->
		<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
		<!-- Bootstrap-extend -->
		<link rel="stylesheet" href="/css/bootstrap-extend.css">
		<!-- theme style -->
		<link rel="stylesheet" href="/css/master_style.css">
		<!-- Crypto_Admin skins -->
		<link rel="stylesheet" href="/css/skins/_all-skins.css">
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
	</head>
	<body class="hold-transition skin-yellow sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<b class="logo-mini">
						<span class="light-logo"><img src="/images/logo-light.png" alt="logo"></span>
						<span class="dark-logo"><img src="/images/logo-dark.png" alt="logo"></span>
					</b>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg">
						<img src="/images/logo-light-text.png" alt="logo" class="light-logo">
						<img src="/images/logo-dark-text.png" alt="logo" class="dark-logo">
					</span>
				</a>
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only"><?PHP echo $lang_toggle_nav; ?></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="search-box">
								<a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
								<form class="app-search" style="display: none;">
									<input type="text" class="form-control" placeholder="<?PHP echo $lang_search_value; ?>"> <a class="srh-btn"><i class="ti-close"></i></a>
								</form>
							</li>
							<!-- Messages -->
							<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-inbox"></i>
								</a>
								<ul class="dropdown-menu scale-up">
									<li class="header"><?PHP echo str_replace("%count%", "1", $lang_messages_total); ?></li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu inner-content-div">
											<!-- start message -->
											<li>
												<a href="#">
													<div class="pull-left">
														<img src="/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
													</div>
													<div class="mail-contnet">
														<h4>Lorem Ipsum<small><i class="fa fa-clock-o"></i> 15 mins</small></h4>
														<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
													</div>
												</a>
											</li>
											<!-- end message -->
										</ul>
									</li>
									<li class="footer"><a href="#"><?PHP echo $lang_messages_view_all; ?></a></li>
								</ul>
							</li>
							<!-- Notifications -->
							<li class="dropdown notifications-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="mdi mdi-bell"></i>
								</a>
								<ul class="dropdown-menu scale-up">
									<li class="header"><?PHP echo str_replace("%count%", "1", $lang_notifications_total); ?></li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu inner-content-div">
											<li>
												<a href="#"><i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.</a>
											</li>
										</ul>
									</li>
									<li class="footer"><a href="#"><?PHP echo $lang_notifications_view_all; ?></a></li>
								</ul>
							</li>
							<!-- User Account -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="/images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
								</a>
								<ul class="dropdown-menu scale-up">
									<!-- User image -->
									<li class="user-header">
										<img src="/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">
										<p>Romi Roy<small class="mb-5">jb@gmail.com</small><a href="#" class="btn btn-danger btn-sm btn-rounded"><?PHP echo $lang_topmenu_view_profile; ?></a></p>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<div class="row no-gutters">
											<div class="col-12 text-left">
												<a href="#"><i class="ion ion-person"></i> <?PHP echo $lang_topmenu_my_profile; ?></a>
											</div>
											<div class="col-12 text-left">
												<a href="#"><i class="ion ion-settings"></i> <?PHP echo $lang_topmenu_settings; ?></a>
											</div>
											<div role="separator" class="divider col-12"></div>
											<div class="col-12 text-left">
												<a href="#"><i class="ti-settings"></i> <?PHP echo $lang_topmenu_account_settings; ?></a>
											</div>
											<div role="separator" class="divider col-12"></div>
											<div class="col-12 text-left">
												<a href="#"><i class="fa fa-power-off"></i> <?PHP echo $lang_topmenu_logout; ?></a>
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="ulogo">
							<a href="index.html">
								<!-- logo for regular state and mobile devices -->
								<span><b>Thor</b>nament</span>
							</a>
						</div>
						<div class="image">
							<img src="/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
						</div>
						<div class="info">
							<p>User#000000</p>
							<a href="" class="link" data-toggle="tooltip" title="<?PHP echo $lang_menu_account_settings; ?>" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
							<a href="" class="link" data-toggle="tooltip" title="<?PHP echo $lang_menu_support; ?>" data-original-title="Email"><i class="ion ion-help-circled"></i></a>
							<a href="" class="link" data-toggle="tooltip" title="<?PHP echo $lang_menu_logout; ?>" data-original-title="Logout"><i class="ion ion-power"></i></a>
						</div>
					</div>
					<!-- sidebar menu -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="nav-devider"></li>
						<li class="<?PHP if ($page == "dashboard") { echo "active"; } ?>">
							<a href="/dashboard">
								<i class="icon-home"></i> <span><?PHP echo $lang_menu_dashboard; ?></span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
						</li>
						<li class="<?PHP if ($page == "tournaments") { echo "active"; } ?>">
							<a href="/tournaments">
								<i class="fa fa-trophy"></i> <span><?PHP echo $lang_menu_tournaments; ?></span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
						</li>
						<li class="header nav-small-cap"><?PHP echo $lang_menu_topic_personal; ?></li>
						<li>
							<a href="#">
								<i class="fa fa-user"></i> <span><?PHP echo $lang_menu_profile; ?></span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-users"></i> <span><?PHP echo $lang_menu_teams; ?></span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="#">Test team</a></li>
							</ul>
						</li>
					</ul>
				</section>
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Main content -->
				<section class="content">
				<?PHP
					if (file_exists("pages/".$page.".php")) {
						include("pages/".$page.".php");
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
</html>