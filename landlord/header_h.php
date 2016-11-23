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
					<li class="post"><em></em><a href="dashboard.php">לוּחַ מַחווָנִים</a></li>
					<li class="post"><em></em><a target="_blank" href="../index.php">לחפש</a></li>
					<li class="post"><em></em><a href="add_post.php">הוסף נכס</a></li>
					<li class="post"><em></em><a href="post_listing.php">הרישום שלי</a></li>
					
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

					<!-- <li class="post"><em></em><a href="#">Example3</a></li> -->
					<?php 
								$getto1='';
								foreach($_GET as $key=>$val)
								{
									$getto1.=$key.'='.$val.'--121--';
								}
							?>
							<style>
								.flag{
									       height: 33px;
											width: 25px;
											margin-top:-5px;
											//position: fixed;
											//top: .67%;
											//right: 13.5%;
											//right: 13.5%;
								}
							</style>
					<li class="dropdown" dir='ltr'>
						<a style="padding: 8px 5px;" href="../change_langauage.php?language=English&backpage=<?php echo $_SERVER['PHP_SELF'].'?'.$getto1;?>"><img src="../images/Eflag.ico" class="flag"> English</a>
					</li>
					<li class="find"><em></em><a href="profile.php">פּרוֹפִיל</a></li>
					<li class="find"><em></em><a href="change_password.php">הגדרה</a></li>
					<li class="find"><em></em><a href="logout.php">להתנתק</a></li>
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
				<li style="float: left"><a href="dashboard.php"><img src="../images/logo.png" class="logo" /></a></li>							
			</ul>
		</div>			
	</div>
	<div class="shadow"></div>
</div>