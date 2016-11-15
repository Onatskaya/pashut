<?php

$member_id= $_SESSION['member_id'];
$today_date= date('Y-m-d');


$que_s="SELECT * FROM members m
		INNER JOIN plan_tbl p on m.member_id = p.member_id
		WHERE m.member_id='$member_id' AND m.order_id= p.order_id AND m.member_status='Enable' ";
// print_r($que_s);die;
$obj_s=mysqli_query($conn,$que_s);
$data_s= mysqli_fetch_assoc($obj_s);
if($data_s['end_date'] < $today_date)
{
	$que_pt="UPDATE plan_tbl SET plan_status='Disable' WHERE order_id='".$data_s['order_id']."' ";
	$obj_pt= mysqli_query($conn,$que_pt);
	$que_mm="UPDATE members SET member_status='Disable' WHERE order_id='".$data_s['order_id']."' ";
	$obj_mm= mysqli_query($conn,$que_mm);
}

$que_pc="SELECT * FROM members WHERE member_id='$member_id' AND member_status='Enable' ";
// print_r($que_pc);die;
$obj_pc= mysqli_query($conn,$que_pc);
$data_pc=mysqli_fetch_assoc($obj_pc);
	
?>
<div class="navbar-wrapper">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid no-side-pad">	  
	  
			<div class="navbar-header">
			  
				<span class="title"><a href="../index.php"><img src="../images/logo.png" width="175"></a></span>
			  
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-collapse-1">
			  <ul class="nav navbar-nav">
<li class="post"><em></em><a href="../index.php">Home</a></li>
						<?php
							if(mysqli_num_rows($obj_pc))
							{ ?>
								<li class="home"><em></em><a href="view_property.php">Search Property</a></li>
							<?php }
							else
							{
								echo "<script>setTimeout(function(){window.location.href='update_plan.php'},2000);</script><h4 style='z-index:99; background-color:#FF3366;width:50%; top:200px;; left:25%; position: absolute; padding:15px 15px; color: #fff; text-align:center; font-size:18px;'>Membership is Expire , Upgrade your plan</h4>";
							}
						?>
						<li class="post"><em></em><a href="member_detail.php">Profile</a></li>
						<li class="post"><em></em><a href="update_plan.php">Upgrade Plan</a></li>
						<li class="find"><em></em><a href="#"></a></li>
						
						
						<!-- <li class="dropdown">
						  <ul class="dropdown-menu">
							<li class="home"><em></em><a href="#">Example4</a></li>
							<li class="post"><em></em><a href="#">Example5</a></li>
							<li class="post"><em></em><a href="#">Example6</a></li>
							<li class="find"><em></em><a href="logout.php">Logout</a></li>
						  </ul>								
						</li> -->
					
				
			  </ul>
			  
			  <ul class="nav navbar-nav navbar-right">
				
				

					<li class="dropdown">
					  <a href="../aboutus.php" class="dropdown-toggle"></a>
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

					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
					  <!-- <ul class="dropdown-menu">								
						
					<li><a href="#" target="_blank">Rental Application</a></li>
						<li><a href="#" target="_blank">Tenant Screening Application</a></li>
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
						
					<li class="find"><em></em><a href="favorite.php">Favorites</a></li>
					<li class="find"><em></em><a href="change_password.php">Preferences</a></li>
					
					<li class="find"><em></em><a href="logout.php">Logout</a></li>
					<!-- <li class="login"><em></em><a href="login.html"><strong>Sign In</strong></a></li> -->
					
					
					<!-- <li class="dropdown">
					  <ul class="dropdown-menu">
						<li class="login"><em></em><a href="login.html">Sign In</a></li>
						
					  </ul>
					</li> -->
				
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
			  
				<li><a href="../index.php"><img src="../images/logo.png" class="logo" /></a></li>					
			  
				
			</ul>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				
			</div>
		</div>
		
	</div>
	
	<div class="shadow"></div>
</div>
