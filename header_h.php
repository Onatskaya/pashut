<?php

$que_pet_count= "SELECT *  FROM  post WHERE pet !=2 ";
// print_r($que_pet_count);die;
$obj_pet_count= mysqli_query($conn,$que_pet_count);
$total_pet=mysqli_num_rows($obj_pet_count);

$que_total_post="SELECT * FROM post ";
$obj_total_post=mysqli_query($conn,$que_total_post);
$total_post= mysqli_num_rows($obj_total_post);

$que_total_pic="SELECT * FROM house_image";
$obj_total_pic= mysqli_query($conn,$que_total_post);
$total_pic2=mysqli_num_rows($obj_total_pic);

$total_pic= ($total_post*5)+$total_pic2; 

$yesterday_date=date('Y-m-d H:i:s',strtotime('-1 day'));
$today_date=date('Y-m-d H:i:s');
$que_new_list= "SELECT * FROM post WHERE date BETWEEN '$yesterday_date' AND '$today_date' ";
$obj_new_list= mysqli_query($conn,$que_new_list);
$total_new_list=mysqli_num_rows($obj_new_list);
// print_r($que_new_list);die;

$today_post_date=date('Y-m-d');

$que_up_date="UPDATE post SET post_date_confirm='yes' WHERE post_date <= '$today_post_date' ";
// print_r($que_up_date);die;
$obj_up_date=mysqli_query($conn,$que_up_date);


?>

<div class="navbar-wrapper">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container-fluid no-side-pad">	  
			  
					<div class="navbar-header">
					  
						<span class="title"><a href="#"><img src="images/logo.png" width="175"></a></span>
					  
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<?php
					if(isset($_SESSION['member_logged']))
					{
						include('header_member_h.php');
					}
					?>

					<div class="navbar-collapse collapse" id="navbar-collapse-1">
					  <ul class="nav navbar-nav">
							
								<li class="home"><em></em><a href="index_h.php">ראשי</a></li>
								<li class="post"><em></em><a href="join_h.php">הצטרפות</a></li>
								<li class="post"><em></em><a href="post_h.php">פרסום מודעה</a></li>
								<li class="find"><em></em><a href="guestsearch_h.php">מודעות נבחרות</a></li>
                                <li class="find"><em></em><a href="featured_listings.php">בעלי מקצוע</a></li>
								
								<li class="dropdown">
								  <ul class="dropdown-menu">
									<li class="home"><em></em><a href="index_h.php">ראשי</a></li>
									<li class="post"><em></em><a href="contactus_h.php">הצטרפות</a></li>
									<li class="post"><em></em><a href="post_h.php">פרסום מודעה</a></li>
									<li class="find"><em></em><a href="find_h.php">Find Office</a></li>
								  </ul>								
								</li>
							
						
					  </ul>
					  
					  <ul class="nav navbar-nav navbar-right">
						
						

							<!-- <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forms</a>
							  <ul class="dropdown-menu">								
								<li><a href="#" target="_blank">Rental Application</a></li>
								<li><a href="#" target="_blank">Tenant Screening Application</a></li>
							  </ul>
							</li> -->
							
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
							  <a style="padding: 8px 5px;" href="change_langauage.php?language=English&backpage=<?php echo $_SERVER['PHP_SELF'].'?'.$getto1;?>"><img src="images/Eflag.ico" class="flag"> English</a>
							</li>
							
							<?php
								if(!isset($_SESSION['member_logged']))
								{ ?>
							<li class="login"><em></em><a href="login2_h.php"><strong>התחבר</strong></a></li>
							<?php } ?>
							
							<li class="dropdown">
							  <ul class="dropdown-menu">
								<li class="login"><em></em><a href="login_h.php">התחבר</a></li>
								
							  </ul>
							</li>
						
					  </ul>
					  
					</div>
				
			  </div>
			</div>
		</div>
		<?php
		if(isset($_SESSION['member_logged']))
		{ ?>
			<br>&nbsp;
		<?php } ?>
		<div class="hero">
		<img src="images/hero-bar.jpg">
			<div class="container-fluid">
				<div class="col-md-6 col-sm-6">
					<ul class="list-inline">
					  
						<li style="float:left"><a href="index.php"><img src="images/logo.png" class="logo" /></a></li>					
					  
						
					</ul>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="row">
						<div class="col-md-4">
							
						</div>
						<div class="col-md-8">
							<ul class="list-inline text-right">
								<?php
								if(!isset($_SESSION['member_logged']))
								{ ?>
									<li> <a href="join_h.php"><span class="join-banner">הצטרף עכשיו </span></a></li>
								<?php } ?>			
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			<div class="counters">
				
					<div class="line"><span class="title">התחבר:</span><span class="numbers"><?php echo number_format($total_post); ?></span></div>
				<div class="line"><span class="title">מודעות באתר:</span><span class="numbers"><?php echo number_format($total_pet); ?></span></div>
				 <div class="line"><span class="title">סה"כ תמונות:</span><span class="numbers"><?php echo number_format($total_pic); ?></span></div>
				  <div class="line"><span class="title">מודעות חדשות (24 שעות):</span><span class="numbers"><?php echo number_format($total_new_list); ?></span></div>    
			</div>
			<div class="shadow"></div>
		</div>
