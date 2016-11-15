<?php
include("../functions/function.php");
include('check_login.php');
if($_SESSION['language']=='Hebrew')
{
	$getto='';
	foreach($_GET as $key=>$val)
	{
		$getto.=$key.'='.$val.'&';
	}
	echo "<script>location.href='dashboard_h.php?$getto'</script>";
}

$member_id=$_SESSION['member_id'];
$que_ll="SELECT * FROM post WHERE member_id= $member_id AND property_available='Available' AND post_date_confirm='yes' ";
$obj_ll=mysqli_query($conn,$que_ll);
$row_ll=mysqli_num_rows($obj_ll);

$que_ss="SELECT * FROM post WHERE member_id= $member_id AND property_available='Available' AND post_date_confirm !='yes' ";
$obj_ss=mysqli_query($conn,$que_ss);
$row_ss=mysqli_num_rows($obj_ss);

$que_rl="SELECT * FROM post WHERE member_id= $member_id AND property_available !='Available' ";
$obj_rl=mysqli_query($conn,$que_rl);
$row_rl=mysqli_num_rows($obj_rl);

?>


<!DOCTYPE HTML> 
<html lang="en">
  <head>		
		<title>Pashutlehaskir.com</title>
		<link rel="shortcut icon" href="" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">				
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8" />				
		<meta name="apple-itunes-app" content="app-id=509021914">									
		<!-- Latest compiled and minified CSS -->
		<link href="../css/201603/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Custom styles for this template -->
		<link href="../css/201603/global.css" rel="stylesheet">
		<link href="../css/201603/section.css" rel="stylesheet">
		<link href="../css/201603/carousel.css" rel="stylesheet">
	
		<meta name="keywords" content="pashutlehaskir.com | Rent SoCal Houses, Apartments & More, Los Angeles rentals, Santa Monica House, South Bay Rentals, Los Angeles Apartments, Orange County Rentals, San Diego Apartments, Hermosa Beach Apartments, Hollywood For Rent, Burbank Apartments, Glendale Homes, Studio City Rentals, Apartments for Rent, Houses for Rent, Condos for Rent, Apartments in Los Angeles, Apartments in LA, USC, University of Southern California, Cal State, California State University, UCLA, University of California, University of California Los Angeles, Loyola Marymount University, Pepperdine, Pepperdine University, USC Student Housing, USC Housing, USC Apartments, Cal State Housing, Cal State Student Housing, Cal State Apartments, UCLA Housing, UCLA Student Housing, UCLA Apartments, LMU Housing, LMU Student Housing, LMU Apartments, Pepperdine Housing, Pepperdine Student Housing, Pepperdine Apartments" />
		<meta name="description" content="pashutlehaskir.com is the #1 home finding service in the Los Angeles area. Search SoCal apartment rentals, houses, condos & roommates!" />
		<meta name="robots" content="index,follow" />
		<meta name="GOOGLEBOT" content="index,follow" />		
		<meta name="google-translate-customization" content="954d153704cc37f5-fac58c9bb4d3c842-g115d03cfb1ac5d23-17"></meta>		       
</head>
	<body  class="landlord" >
	
	
	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NXH8RQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NXH8RQ');</script>
<!-- End Google Tag Manager --> 


<?php
include('header.php');
?>	
	
	<div class="container">
	<div class="container ll-dash">
		<!-- <div class="col-md-3 left-col">
			
			<div class="line">
				<a href="leasingserviceinfo.cfm">
					<img src="images/new/ll-leasing-banner.jpg" border="0"  />
				</a>
			</div>

			<div class="line">
				<a href="enhanceListing.cfm">
					<img src="images/new/ll-featured-banner.jpg" border="0"  />
				</a>
			</div>

			<div class="ts-mod">
				<h3>Tenant Screenings</h3>
				<h4><a href="landlords/tenantscreening/">Click here to learn more</a></h4>
				<p>Our Hours: 8am-8pm M-F, 10am-6pm Sat-Sun</p>

				<h4>Credit Check Fax @ 888.938.1116</h4>
				<p><a href="/pdf/tenant_screening_application.pdf">Fax Us the Tenant Screening Application</a></p>
				

				<h4>Compliance Fax @ 888.938.1119</h4>
				<p><a href="/pdf/cc_compliance.pdf">Fax Us the Compliance Packet</a></p>
			</div>
			<div class="line">
				<a href="rentDoctor.cfm">
					<img src="/images/new/ll-rentdr-banner.jpg" border="0"  />
				</a>
			</div>
			
			<div class="forms-mod">
				<h3>Useful Forms for Landlords</h3>
				
				<ul>
					
						<li><a href="/pdf/Credit Report, How to Read.pdf" target="_blank">How to read Credit Checks</a></li>
					
						<li><a href="/pdf/FCRA DOCUMENT.pdf" target="_blank">The Fair Credit Reporting Act</a></li>
					
						<li><a href="/pdf/California Tenant Law.pdf" target="_blank">California Tenant Law</a></li>
					
						<li><a href="/pdf/Sample ScoreCard.pdf" target="_blank">Sample of Scorecard Report</a></li>
					
						<li><a href="/pdf/Sample Detailed Report.pdf" target="_blank">Sample Detailed Report</a></li>
					
						<li><a href="/pdf/New Residential Lease5.pdf" target="_blank">Residential Lease Agreement</a></li>
					
						<li><a href="/pdf/Registration Packet.pdf" target="_blank">Registration For Credit Checks</a></li>
					
						<li><a href="/pdf/Tenant Screening Application11.pdf" target="_blank">Tenant Screening Application</a></li>
					
						<li><a href="/pdf/Rental Application9.pdf" target="_blank">Rental Application</a></li>
					
						<li><a href="/pdf/Adverse_Action_Notice.pdf" target="_blank">Notice of Adverse Action</a></li>
					
				</ul>
			</div>
		</div>
		 -->
		
		<div class="col-md-9">
			


<div class="dash-top-section-wrap row">
	<div class="col-md-12 dash-top-section">
		<h2>Let us do the work for you!</h2> 
		<nav class="navbar navbar-default dash-nav" role="navigation">
			<div class="navbar-header">
				<span class="title">Let us do the work for you!</span> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			  </div>
		
			<div class="collapse navbar-collapse" id="navbar-collapse-2">
				<ul class="nav navbar-nav list-inline dash-nav">
					<li class="selected">
						<a href="dashboard.php">
							Home
						</a>
					</li>
					<!-- <li class="">
						<a href="/landlords/alertedit.cfm">
							Email &amp; Text Alerts
						</a>
					</li> -->
					
					<li class="">
						<a href="add_post.php">
							Add New Listing
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	
		
		<!-- <div class="col-md-3 message-mod">
			<h3>Your Message Center</h3>
			<div class="text_wrapper">
				
				<div class="highlight"><em></em><b>0</b> Unread Messages </div>
				
				
				<div class="detail-link">
					<a href="/inbox.cfm">View More Messages</a>
				</div>
			</div>
		</div> -->
	
</div>
			
			<div class="center-mod">
				
				
				<div class="current-list">
					<h3>
						Live Listings
						<span class="subtext"> - <?php echo $row_ll; ?> Vacant</span>
						<span class="create-link"><em /><a href="add_post.php">Create a New Listing</a></span>
					</h3>
					<div class="body">
						<?php
						if($row_ll== 0)
						{ ?>
							<b>No New Listing</b><br />
						<?php }
						else
						{ ?>
							<b><?php echo $row_ll; ?> New Listing</b><br />
						<?php	}
							?>
					</div>
				</div>

				
				
				
				<div class="saved-list">
					<h3>
						Scheduled & Saved Listings
						<span class="subtext"> - <?php echo $row_ss; ?> Scheduled</span>
					</h3>
					<div class="body">
						<?php
						if($row_ss== 0)
						{ ?>
							<b>No Saved Listing</b><br />
						<?php }
						else
						{ ?>
							<b><?php echo $row_ss; ?> Saved Listing</b><br />
					<?php	}
						?>
					</div>
				</div>

				
				
				
				<div class="rented-list">
					<h3>
						Rented Listings
						<span class="subtext"> - <?php echo $row_rl; ?> rented</span>
					</h3>
					<div class="body">
						<?php
						if($row_rl== 0)
						{ ?>
							<b>No Rented Listings</b><br />
						<?php }
						else
						{ ?>
							<b><?php echo $row_rl; ?> Rented Listings</b><br />
						<?php	}
							?>
					</div>
				</div>

				

               
			</div>
		</div>
	</div>


</div> <!-- End main container div -->
	
	
		<!-- FOOTER -->
<?php
include("footer.php");
?>	
	


	
<script src="../js/jquery.min.js"></script>
<script src="../js/new/jquery-ui-1.10.4/jquery-ui-1.10.4.js"></script>
<script src="../js/new/jquery.cycle.all.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>		
<script src="../js/fb_login.js"></script>	
<script src="../js/navigation/menu.js" type="text/javascript" language="javascript"></script>	
<script src="../js/default.js" type="text/javascript" language="javascript"></script>	
<script src="../js/ddaaccordion.js" type="text/javascript" language="javascript"></script>
<!-- Default JavaScript -->
<script src="../js/new/default.js"></script>
	
		
	


<div id="overDiv" style="position:absolute; visibility:hide;z-index:1;"></div>
<script type="text/javascript">
(function(){"use strict";var e=null,b="4.0.0",
n="12917",
additional="",
t,r,i;try{t=top.document.referer!==""?encodeURIComponent(top.document.referrer.substring(0,2048)):""}catch(o){t=document.referrer!==null?document.referrer.toString().substring(0,2048):""}try{r=window&&window.top&&document.location&&window.top.location===document.location?document.location:window&&window.top&&window.top.location&&""!==window.top.location?window.top.location:document.location}catch(u){r=document.location}try{i=parent.location.href!==""?encodeURIComponent(parent.location.href.toString().substring(0,2048)):""}catch(a){try{i=r!==null?encodeURIComponent(r.toString().substring(0,2048)):""}catch(f){i=""}}var l,c=document.createElement("script"),h=null,p=document.getElementsByTagName("script"),d=Number(p.length)-1,v=document.getElementsByTagName("script")[d];if(typeof l==="undefined"){l=Math.floor(Math.random()*1e17)}h="dx.steelhousemedia.com/spx?"+"dxver="+b+"&shaid="+n+"&tdr="+t+"&plh="+i+"&cb="+l+additional;c.type="text/javascript";c.src=("https:"===document.location.protocol?"https://":"http://")+h;v.parentNode.insertBefore(c,v)})()
</script>


			
	</body>