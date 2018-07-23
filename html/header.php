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
				<?PHP
					if (isset($_SESSION['userData'])) {
				?>
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
									<img src="<?php echo $user->picture; ?>" class="user-image rounded-circle" alt="User Image">
								</a>
								<ul class="dropdown-menu scale-up">
									<!-- User image -->
									<li class="user-header">
										<img src="/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">
										<p><span style="font-weight: bold; color: rgb(251, 174, 28);"><?PHP echo substr($user->user_id, 0, -5) ?></span>#<?php echo substr($user->user_id, -5); ?><small class="mb-5"><?php echo $user->email; ?></small><a href="#" class="btn btn-danger btn-sm btn-rounded"><?PHP echo $lang_topmenu_view_profile; ?></a></p>
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
												<a href="/logout"><i class="fa fa-power-off"></i> <?PHP echo $lang_topmenu_logout; ?></a>
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<?PHP
					}
				?>
