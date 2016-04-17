<?php
include_once("lock.php");
?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-jvert-tabs-1.1.4.css" />
<link rel="stylesheet" type="text/css" href="css/my-job.css" />
<link rel="shortcut icon" href="favicon.ico" type="../image/x-icon" />
<link href="../style.css" rel="stylesheet" type="text/css">
<!-- <link href="../css/shortcodes.css" rel="stylesheet" type="text/css"> -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/shortcodes.css" rel="stylesheet" type="text/css">
<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">   -->
<link rel='stylesheet' id='layerslider-css' href="../css/layerslider.css" type='text/css' media='all' />

<!--prettyPhoto-->
<link href="../css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />   
<!-- Include JQuery Core-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
 <script src="js/ga.js" async type="text/javascript"></script>

         <!-- global javascript variable for host/domain  replicate here as hirist Amitv 8 may 2014 -->
        <script type="text/javascript">
            var host = "iimjobs";
        </script>
<!-- Include JQuery Vertical Tabs plugin -->
<script type="text/javascript" src="js/jquery-jvert-tabs-1.1.4.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#vtabs1").jVertTabs();
	$("#vtabs2").jVertTabs({
		selected: 1
	});
	
		
	// add click events for open tab buttons
	$("input[id^=openTab]").each(function(index){
		$(this).click(function(){
			openTab("#vtabs6",index);
			return false;
		});
	});	
	function openTab(tabId,index){
		$(tabId).jVertTabs('selected',index);
	}
});
</script>
<link rel="stylesheet" type="text/css" href="css/tabcontent.css" />

<script type="text/javascript" src="js/tabcontent.js"></script>



<script type="text/javascript">
    $(document).ready(function () {
        var ajaxurl = "http://www.iimjobs.com/includes/getajaxresponse.php";
        var absUrl = 'http://www.iimjobs.com';
        var metaCatId = 0;
        metaPage(ajaxurl,absUrl,metaCatId);
    });
</script>
<!--start facebook widget script-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--end facebook widget script-->

</head>

<body>
<div class="header">
<div class="wrapper">
<!--header starts-->
 
		<header>
	  
            <div class="container">
                <div class="logo">
                    <a href="admin.php" title="My Learning Planet"><img src="images/my_learning_planet.png" alt="My Learning Planet" title="My Learning Planet"></a>
                </div>
		        
                <div class="contact-details">
                    
                    <ul>
							<?php
						   if(isset($_SESSION['IDD']))
						   {  
						   ?>   
						   <li><i class="fa fa-user"></i><a href="#"><?php echo "Hi";?>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></a></li>
							<li><i class="fa fa-lock"></i><a href="logout.php"><?php echo "logout";?></a></li>
		                     <?php
							 } 
                             ?>
							</ul>   					
                </div> 
            </div>
            <!--menu-container starts-->
       <!--menu-container ends-->
        </header>
        <!--header ends-->
</div>
</div>
<div class="miscl">
<div class="clr"></div>
<div class="wrapper">
<div class="c-agent">
<h4>Admin:  <span>Dashboard</span></h4>

</div>
</div>
</div>
<div class="edit-conf">
<!-- <a href="#"> Edit Information</a> <a href="#"> Confirm &amp; Apply</a>  -->
</div>
<div class="result">
<div class="dashb">
<div id="vtabs1">
        <!--start Add service Table-->
                <?php
				$ch_id = $_GET['ch_id'];
				$sqlc = "select * from add_service where s_id=$ch_id";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
		
	            <h3>Services</h3>  
				<table class="history">
				<tr>
				<th class="th1">ID</th>
				<th class="th1">New Service</th>
				<th class="th1">Date</th>
				</tr>
				<?php
				/* $date = date("Y/m/d"); */
				$ch_id = $_GET['ch_id'];
				$sql = "select * from add_service where s_id='$ch_id'";
				$result = mysql_query($sql);
				while($raw1 = mysql_fetch_array($result))
				{
					
				?>
				<tr>
				<td class="th1"><?php echo $raw1['s_id'];?></td>
				<td class="th1"><?php echo $raw1['new_service'];?></td>
				<td class="th1"><?php echo $raw1['date'];?></td>
				</tr>
				<?php } ?>
				</table>
		        <?php
				}
				?>
	         <!--End Add service Table-->
	      
		      <!--Start Notification table-->	
					<?php
				$ch_id = $_GET['ch_id'];
				$sqlc = "select * from notification where s_id=$ch_id";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
		  
			 <h3>Nptification</h3>
							<table class="history">
								<tr>
									<th class="th1">ID</th>
									<th class="th1">Notification</th>
									<th class="th1">Date</th>
								</tr>
								
								
								<?php
								/* $date = date("Y/m/d"); */
								$ch_id = $_GET['ch_id'];
								$sql = "select * from notification where s_id='$ch_id'";
								$result = mysql_query($sql);
								while($raw2 = mysql_fetch_array($result))
							    { 
								?>
								<tr>
									<td class="th1"><?php echo $raw2['s_id'];?></td>
									<td class="th1"><?php echo $raw2['notification'];?></td>
									<td class="th1"><?php echo $raw2['date'];?></td>
								</tr>
								<?php } ?>
							</table>
                            <?php
				            }
							?>							
		                  <!--End Notification Table-->
			  
			  <!--Start Recommendation table-->		
				<?php
				$ch_id = $_GET['ch_id'];
				$sqlc = "select * from recommendation where s_id=$ch_id";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
			  
               <h3>Recommendation</h3>
							<table class="history">
								<tr>
									<th class="th1">ID</th>
									<th class="th1">Recommendation</th>
									<th class="th1">Date</th>
								</tr>
								
								
								<?php
								/* $date = date("Y/m/d"); */
								$ch_id = $_GET['ch_id'];
								$sql = "select * from recommendation where s_id='$ch_id'";
								$result = mysql_query($sql);
								while($raw3 = mysql_fetch_array($result))
							    { 
								?>
								<tr>
									<td class="th1"><?php echo $raw3['s_id'];?></td>
									<td class="th1"><?php echo $raw3['recommendation'];?></td>
									<td class="th1"><?php echo $raw3['date'];?></td>
								</tr>
								<?php } ?>
							</table> 
							<?php
				             }
							?>
			  <!--End Recommendation table-->	
			 
			 <!--Start Weekly Observation Report table-->	
					<?php
				$ch_id = $_GET['ch_id'];
				$sqlc = "select * from weekly_observation_report where s_id=$ch_id";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
               <h3>Weekly Observation Report</h3>
							<table class="history">
								<tr>
				                    <th class="th1">course</th>
				                    <th class="th1">Areas of Improvement </th>
				                    <th class="th1">Positive Aspects of Personalities of child</th>
				               <th class="th1">Action Taken by Institute to improve child performance</th>
				              <th class="th1">Action to be Taken by the Parent's to improve child performance</th>
				                 <th class="th1">Suggested Course to improve further information</th>
				                <th class="th1">Other Remarks</th>
				                 <th class="th1">Date</th>
								</tr>
								
								
								<?php
								/* $date = date("Y/m/d"); */
								$ch_id = $_GET['ch_id'];
								$sql = "select * from weekly_observation_report where s_id='$ch_id'";
								$result = mysql_query($sql);
								while($raw3 = mysql_fetch_array($result))
							    { 
								?>
								<tr>  
			<td class="th1"><?php echo $raw3['course'];?></td>
			<td class="th1"><?php echo $raw3['areas'];?></td>
			<td class="th1"><?php echo $raw3['positive_aspects'];?></td>
			<td class="th1"><?php echo $raw3['institute_to_improve'];?></td>
			<td class="th1"><?php echo $raw3['parents_to_improve'];?></td>
			<td class="th1"><?php echo $raw3['suggest_course'];?></td>
			<td class="th1"><?php echo $raw3['other_remarks'];?></td>
			<td class="th1"><?php echo $raw3['date'];?></td>
								</tr>
								<?php } ?>
							</table> 
		  					<?php
				            }
							?>
				<!--End Weekly Observation Report table-->
	
    </div>
		</div>	
        
	</div>
 </div> 
<!-- </div> -->
</div>


<footer>
            <!--footer-widgets-wrapper starts-->
            <div class="footer-widgets-wrapper">
                <!--container starts-->
             
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info" id="copyright1">© 2014 My Learning Planet. All rights reserved. Website by <a href="http://www.webfries.com" title="" target="blank"> Webfries </a></p>
        			
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->

</body>
</html>