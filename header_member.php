<?php
if(isset($_SESSION['member_logged']))
{
	$member_id= $_SESSION['member_id'];
	$que_mem="SELECT * FROM members WHERE member_id='$member_id' ";
	$obj_mem= mysqli_query($conn,$que_mem);
	$data_mem= mysqli_fetch_assoc($obj_mem);

}
?>

<div id="navbar-collapse-1" class="navbar-collapse collapse" style="background-color:#7f402f">
  	<ul class="nav navbar-nav">
		<li class="welcome">Hey <?php echo $data_mem['first_name'];?></li>
		<li class="logout"><a href="member/logout.php">Logout</a></li>
	</ul>
  	<ul class="nav navbar-nav navbar-right">
  		<li class="home"><em></em><a href="member/view_property.php">Search Property</a></li>
		<li class="post"><em></em><a href="member/member_detail.php">Profile</a></li>
		<li class="post"><em></em><a href="member/update_plan.php">Upgrade Plan</a></li>
		<li class="find"><em></em><a href="member/favorite.php">Favorites</a></li>
		<li class="find"><em></em><a href="member/change_password.php">Preferences</a></li>
	</ul>
</div>