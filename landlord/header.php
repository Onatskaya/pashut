<div class="navbar-wrapper">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid no-side-pad">	  
	  
			<div class="navbar-header">
			  
				<span class="title"><a href="#"><img src="../images/logo.png" width="175"></a></span>
			  
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-collapse-1">
			  	<ul class="nav navbar-nav">
					<!-- <li class="home"><em></em><a href="dashboard.php">Dashboard</a></li> -->
					<li class="post"><em></em><a href="dashboard.php">Dashboard</a></li>
					<li class="post"><em></em><a target='_blank' href="../index.php">Search</a></li>
					<li class="post"><em></em><a href="add_post.php">Add Property</a></li>
					<li class="post"><em></em><a href="post_listing.php">My Listing</a></li>
					
				</ul>
			  	<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <!-- <a href="../aboutus.php" class="dropdown-toggle">About Us</a> -->
					  <!-- <ul class="dropdown-menu">
						<li><a href="aboutus.html">Company History</a></li>
						<li><a href="find.html">Contact Us</a></li>
						<li><a href="jobs.html">Jobs at plh</a></li>
						<li><a href="join.html">Corporate Sales</a></li>
						<li><a href="filminglocations.html">Filming Locations</a></li>
						<li><a href="press.html">Press</a></li>
						<li><a href="hotels.html">Hotels</a></li>
					  </ul> -->
					</li>
					<?php 
									$getto1='';
									foreach($_GET as $key=>$val)
									{
										$getto1.=$key.'='.$val.'--121--';
									}
								?>
							<style>
								.flag{
									      height: 19px;
										width: 25px;
										margin-top:-5px;
										//position: fixed;
										//top: 1.67%;
										//right: 13.7%;
										//right: 13.7%;
								}
							</style>
							<li class="dropdown">
							  <a href="../change_langauage.php?language=Hebrew&backpage=<?php echo $_SERVER['PHP_SELF'].'?'.$getto1;?>"><img src="../images/Hflag.jpg" class="flag"> Hebrew</a>
							</li>
							
					<!-- <li class="post"><em></em><a href="#">Example3</a></li> -->
					<li class="find"><em></em><a href="profile.php">Profile</a></li>
					<li class="find"><em></em><a href="change_password.php">Settings</a></li>
					<li class="find"><em></em><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="hero">
	<img src="../images/hero-bar.jpg">
	<div class="container-fluid">
		<div class="col-md-6 col-sm-6">
			<ul class="list-inline">
				<li><a href="dashboard.php"><img src="../images/logo.png" class="logo" /></a></li>							
			</ul>
		</div>			
	</div>
	<div class="shadow"></div>
</div>