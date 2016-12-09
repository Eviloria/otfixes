						<ul class="nav navbar-nav">
							<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Community <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="onlinelist.php">Online</a></li>
									<li><a href="highscores.php">Highscores</a></li>
									<li><a href="powergamers.php">Power Gamers</a></li>
									<li><a href="houses.php">Houses</a></li>
									<li><a href="guilds.php">Guilds</a></li>
									<li><a href="guildwar.php">Guild Wars</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Library <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="serverinfo.php">Server Information</a></li>
									<li><a href="spells.php">Spells</a></li>
									<li><a href="stages.php">Experience Stages</a></li>
									<li><a href="quests.php">Quests</a></li>
									<li><a href="tasks.php">Tasks</a></li>
								</ul>
							</li>
							<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Shop</a></li>
							<li><a href="forum.php"><i class="fa fa-comment"></i> Forum</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-question-circle"></i> Help <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="support.php">Support</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-left">
							<form class="navbar-form navbar-left" role="search" type="submit" action="?view=characters" method="post">
								<div class="form-group">
									<input type="text" maxlength="45" name="name" class="form-control" style="max-width: 150px;" placeholder="Search character..." required />
								</div>
							</form>
						</ul>

						<ul class="nav navbar-nav navbar-right">
              				<?php if (user_logged_in() === false) { ?>
              				<li> <a href="register.php"><i class="fa fa-share"></i> Create Account</a></li>
                  			<li class="dropdown">
                  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in <b class="caret"></b></a>
								<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
								<li>
									<div class="row">
										<div class="col-md-12">
											<form action="login.php" method="post">
												<div class="form-group">
													<input type="password" name="username" class="form-control" placeholder="Account Name" required />
												</div>
												<div class="form-group">
													<input type="password" name="password" class="form-control" placeholder="Password" required />
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-block">Sign in</button>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="divider"></li>
							<li><p><a href="recovery.php" class="btn btn-danger form-control">Account Lost?</a></p></li>
							</li>
							<?PHP } else { ?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Management<b class="caret"></b></a>
									<ul class="dropdown-menu">							
										<li><a href="myaccount.php">My Account</a></li>
										<li><a href="createcharacter.php">Create Character</a></li>
										<li><a href="changepassword.php">Change Password</a></li>
										<li><a href="settings.php">Settings</a></li>
										<li class="nav-divider"></li>
										<li><a href="logout.php">Sign out</a></li>
									</ul>
								</li>
							<?PHP } ?>
						</ul>
