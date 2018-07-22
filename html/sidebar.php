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
						<li class="<?PHP if ($page == "leaderboard") { echo "active"; } ?>">
							<a href="/leaderboard">
								<i class="fa fa-trophy"></i> <span><?PHP echo $lang_menu_leaderboard; ?></span>
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
