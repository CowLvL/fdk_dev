<?PHP
	if (isset($_GET['arg1']) && $_GET['arg1'] != "") {
		$mode = $_GET['arg1'];
		if (!isset($FDKUSER)) {
			require("engine/classes/user.php");
		}
		$user = new FDK_User;
		$user = (object) $user->getUser($mode)[0];
		$bc_total = "#252525";
		$bc_squad = "#ee534f";
		$bc_duo = "#faae1c";
		$bc_solo = "#02c293";
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
												<div style="text-align: center;"><span style="font-size: 16px; font-weight: bold; color: #bbbbbb;">MEDIA CHANNELS</span></div>
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
									<li><a href="#alltime" data-toggle="tab">All time</a></li>
									<li><a href="#season4" data-toggle="tab">Sæson 4</a></li>
									<li><a class="active" href="#season5" data-toggle="tab">Sæson 5</a></li>
								</ul>
								<div class="tab-content">
									<!-- /.tab-pane -->
									<div class="tab-pane" id="alltime">
									</div>
									<div class="tab-pane" id="season4">
									</div>
									<div class="active tab-pane" id="season5">
									</div>
									<div class="tab-pane" id="settings">
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