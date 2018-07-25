				<!-- sidebar -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="ulogo">
							<a href="/">
								<!-- logo for regular state and mobile devices -->
								<span><b>Thor</b>nament</span>
							</a>
						</div>
						<?PHP
							if (isset($_SESSION['userData'])) {
						?>
						<div class="image">
							<img src="<?php echo $user->picture; ?>" class="rounded-circle" alt="User Image">
						</div>
						<div class="info">
							<p><a href="/user/Scott00000"><span style="font-weight: bold; color: rgb(251, 174, 28);"><?PHP echo substr($user->user_id, 0, -5) ?></span>#<?php echo substr($user->user_id, -5); ?></a></p>
							<a href="/settings#account-settings" class="link" data-toggle="tooltip" title="<?PHP echo $lang_menu_account_settings; ?>" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
							<a href="/support" class="link" data-toggle="tooltip" title="<?PHP echo $lang_menu_support; ?>" data-original-title="Support"><i class="ion ion-help-circled"></i></a>
							<a href="/logout" class="link" data-toggle="tooltip" title="<?PHP echo $lang_menu_logout; ?>" data-original-title="Logout"><i class="ion ion-power"></i></a>
						</div>
						<?PHP
							} else {
								// require facebook login config
								require("engine/fb-config.php");
								// contruct login url
								$redirectURL = "https://dev.fortnitedanmark.dk/engine/fb-callback.php";
								$permissions = ['email'];
								$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
						?>
						<div class="login" style="width: 200px; margin: 0 auto;">
							<div class="social-auth-links text-center">
								<button class="btn btn-block btn-social btn-facebook" onclick="window.location = '<?php echo $loginURL; ?>'" style="padding-left: 40px;">
									<i class="mdi mdi-facebook"></i> <?PHP echo $lang_menu_login; ?>
								</button>
							</div>
							<div style="text-align: center;">
								<span class="login-box-tos"><?PHP echo $lang_menu_login_terms; ?></span>
							</div>
						</div>
						<?PHP
							}
						?>
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
						<li class="<?PHP if ($page == "leaderboard") { echo "active"; } ?>">
							<a href="/leaderboard">
								<i class="fa fa-trophy"></i> <span><?PHP echo $lang_menu_leaderboard; ?></span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
						</li>
						<?PHP
							if (isset($_SESSION['userData'])) {
						?>
						<li class="header nav-small-cap"><?PHP echo $lang_menu_topic_personal; ?></li>
						<li class="<?PHP if ($page == "user") { echo "active"; } ?>">
							<a href="/user/<?PHP echo $user->user_id; ?>">
								<i class="fa fa-user"></i> <span><?PHP echo $lang_menu_profile; ?></span>
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
						</li>
						<li class="<?PHP if ($page == "team") { echo "active "; } ?>treeview">
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
						<?PHP
							}
						?>
					</ul>
				</section>
