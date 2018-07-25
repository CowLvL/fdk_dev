<?PHP
	if (isset($_SESSION['userData'])) {
		$mode = (isset($_GET['arg1']) && $_GET['arg1'] != "") ? $_GET['arg1'] : "site-settings";
		if (!isset($FDKUSER)) {
			require("engine/classes/user.php");
		}
		$user = new FDK_User;
		$user = (object) $user->user($_SESSION['userData']['uid']);
?>
					<div class="row">
						<div class="col-lg-3 col-12">
							<!-- Profile Image -->
							<div class="box bg-sidebar bg-hexagons-white">
								<div class="box-body box-profile">
									<img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="<?php echo $user->picture; ?>" alt="User profile picture">
									<h3 class="profile-username text-center"><span style="font-weight: bold; color: rgb(251, 174, 28);"><?PHP echo substr($user->user_id, 0, -5) ?></span>#<?php echo substr($user->user_id, -5); ?></h3>
									<p class="text-center">Bruger siden <?php echo strftime("%e %B %Y", $user->created); ?></p>
									<div class="row">
										<div class="col-12">
											<div class="profile-user-info">
												<div style="text-align: center;"><span style="font-size: 16px; font-weight: bold; color: #bbbbbb;"><?PHP echo $lang_settings_media_channels; ?></span></div>
												<br />
												<div><button class="btn btn-block btn-social btn-facebook"><i class="mdi mdi-facebook"></i> Facebookside</button></div>
												<div><button class="btn btn-block btn-social btn-youtube"><i class="mdi mdi-youtube-play"></i> Youtube-kanal</button></div>
												<div><button class="btn btn-block btn-social btn-twitch"><i class="mdi mdi-twitch"></i> Twitch-kanal</button></div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
							<?php //echo getProfileTeams($profile); ?>
							<!-- /.box -->
						</div>
						<!-- /.col -->
						<div class="col-lg-9 col-12">
							<div class="nav-tabs-custom">
								<ul class="nav nav-tabs">
									<li><a class="active tab-href" href="#site-settings" data-toggle="tab"><?PHP echo $lang_settings_tab_site_settings; ?></a></li>
									<li><a class="tab-href" href="#account-settings" data-toggle="tab"><?PHP echo $lang_settings_tab_account_settings; ?></a></li>
								</ul>
								<div class="tab-content">
									<!-- /.tab-pane -->
									<div class="active tab-pane" id="site-settings">
										<span>Site settings</span>
									</div>
									<div class="tab-pane" id="account-settings">
										<span>Account settings</span>
									</div>
									<!-- /.tab-pane -->
								</div>
								<!-- /.tab-content -->
							</div>
							<!-- /.nav-tabs-custom -->
						</div>
						<!-- /.col -->
					</div>
<?PHP
	} else {
		echo "Invalid user!";
	}
?>