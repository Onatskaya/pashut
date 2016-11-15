<?php
include_once("config.php");
$name = $_POST["name"]; 
$type = $_POST["type"];
if($type==0)
{
	$queryState="SELECT * FROM location GROUP BY stateName ORDER BY stateName ASC";
	$resultState = mysqli_query($conn,$queryState);
				echo '<option value="">Select State</option>';
	if(mysqli_num_rows($resultState))
	{	
		while($row=mysqli_fetch_assoc($resultState)) 
		{
			extract($row);
				echo "<option value='$stateName'>$stateName</option>";
		}
	}
}
if($type==1)
{
	$queryDistrict="SELECT * FROM location WHERE stateName='$name' GROUP BY districtName ORDER BY districtName ASC";
	$resultDistrict = mysqli_query($conn,$queryDistrict);
				echo '<option value="">Select District</option>';
	if(mysqli_num_rows($resultDistrict))
	{	
		while ($row = mysqli_fetch_assoc($resultDistrict)) 
		{
			extract($row);
				echo "<option value='$districtName'>$districtName</option>";
		}
	}
}
if($type==2)
{
	$queryTehsil="SELECT * FROM location WHERE districtName='$name' GROUP BY taluka ORDER BY taluka ASC";
	$resultTehsil = mysqli_query($conn,$queryTehsil);
				echo '<option value="">Select Tehsil</option>';
	if(mysqli_num_rows($resultTehsil))
	{	
		while ($row = mysqli_fetch_assoc($resultTehsil)) 
		{
			extract($row);
				echo "<option value='$taluka'>$taluka</option>";
		}
	}
}
if($type==3)
{
	$queryPincode="SELECT * FROM location WHERE taluka='$name' GROUP BY pincode ORDER BY pincode ASC";
	$resultPincode = mysqli_query($conn,$queryPincode);
				echo '<option value="">Select Pincode</option>';
	if(mysqli_num_rows($resultPincode))
	{	
		while ($row = mysqli_fetch_assoc($resultPincode)) 
		{
			extract($row);
				echo "<option value='$pincode'>$pincode</option>";
		}
	}
}
if($type==4)
{
	$queryPost="SELECT * FROM location WHERE pincode='$name' GROUP BY officeName ORDER BY officeName ASC";
	$resultPost = mysqli_query($conn,$queryPost);
				echo '<option value="">Select Post Office</option>';
	if(mysqli_num_rows($resultPost))
	{	
		while ($row = mysqli_fetch_assoc($resultPost)) 
		{
			extract($row);
				echo "<option value='$officeName'>$officeName</option>";
		}
	}
}	
?>