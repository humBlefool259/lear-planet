<!--Footer Start-->
    <section id="footer"> 
      <!--Footer Top Start-->
      <div class="footer-top">
        <div class="container">
          <div class="row-fluid">
            <div class="span3">
              <div class="box-1">
                <h4>About</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting...</p>
                <a href="about-us.php" class="btn-readmore curl-top-left">Read More</a> </div>
            </div>
            <div class="span3">
              <div class="box-1">
                <h4>Recent Blogs</h4>
                <ul>
				<?php 
					$que=mysql_query("select * from blogs order by id desc limit 3");
					while($row=mysql_fetch_array($que))
					{
					?>
                  <li>
                    <div class="post-area">
                     <div class="frame"><a href="blog.php?id=<?php echo $row['id']; ?>"><img src="admin/upload/<?php echo $row['image'];  ?>" style="height:70px;width:75px" /></a></div>
                      <div class="text"> <strong class="title"><a href="blog.php?id=<?php echo $row['id']; ?>" style="color: white;text-decoration: none;"><?php echo $row['headline'];?></a></strong> <strong class="mnt"><i class="fa fa-clock-o"></i><?php echo $row['added_date']; ?></strong> </div>
                    </div>
                  </li>
				  <?php
				  }
				  ?>
                  
                  
                </ul>
              </div>
            </div>
            <div class="span3">
              <div class="box-1">
                <h4>Overall top 9 States</h4>
               <?php 
				$state=mysql_query("select * from state limit 9");
				while($result=mysql_fetch_array($state))
				{
				?>
                <div class="flicker" style="width:33%;">
                  <ul>
                    <li><a href="#"><img src="admin/<?php echo $result['file']; ?>" alt="img" style="height:70px;width:75px"></a></li>
                   
                  </ul>
                </div>
				<?php
				}
				?>
              </div>
            </div>
            <div class="span3">
			<!--code for sending email start-->
			<?php
if(isset($_POST['email1']) && $_POST['send']=="tru")
{

   $to=$_POST['email1'];
   $subject = "New Subscription";
   $message = "<b>

Welcome to Tenbags.</b><br>";
   $message .= "You have successfully subscribed .Thank you";
   $message .="<html>
   <head>
   <style>
        body
        {
            width: 700px;
            height: auto;
        }
		</style>
   </head>
   <body>
   
   </body>
   </html>";
   $header = "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   
   //mail for admin
   //$to1="gaurav@webfries.com";
   $to1="kapiljob1@gmail.com";
   //$to1="kapiljob1@gmail.com";
   
   $subject1 = "New Subscription from Tenbags";
   $message1 = "<b>New user wants to subscribe.</b><br>Following are the details :<br>";
   $message1 .= "Email = ".$to;
   
   $header1 = "vipinavns@gmail.com \r\n";
   $header1 = "Cc:vipinavns@gmail.com \r\n";
   $header1 .= "MIME-Version: 1.0\r\n";
   $header1 .= "Content-type: text/html\r\n";
   $retval1 = mail ($to1,$subject1,$message1,$header1);
   if( $retval == true && $retval1 == true)
   {
   //echo "<p id='hd'style='position:fixed;z-index:100;top:63%;left:81%;color:red;'>Thank you for subscribing</p>";
   echo "Thank you for subscribing";
   }
   else
   {
      echo "Message could not be sent...";
   }
}
?>

			<!--code for sending email end-->
              <div class="box-1">
                <h4>Get In Touch</h4>
                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book, It has survived.</p>
                <form class="get-touch-form" method="post" action="">
                  <input name="email1" style="color: #fff!important;" type="text" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" placeholder="Enter you email address">
				  <input type="hidden" name="send" value="tru" >
                  <button type="submit" class="btn-search"><i class="fa fa-angle-double-right"></i></button>
                  <strong class="title">We won't spam you, Don't worry.</strong>
                  <address class="header-4-address">
                  <strong class="info"><i class="fa fa-clock-o"></i>Politicize office No. 123</strong> <strong class="info"><i class="fa fa-phone-square"></i>Phone: (012) 123 456</strong> <a href="mailto:" class="email"><i class="fa fa-envelope-o"></i>Email: info@politicize.com</a>
                  </address>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Footer Top End--> 
      <!--Footer Social Start-->
      <div class="footer-social">
        <div class="container">
          <div class="row-fluid"><div class="nav-holder">
                <div class="navbar margin-none">
                  <div class="container">
                    <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="nav-collapse collapse">
                      <ul id="nav-2">
                        <li class="active"><a href="index.php">Home</a>
                          <!--<ul>
                            <li><a href="header-1.html">Header 1</a></li>
                            <li><a href="header-2.html">Header 2</a></li>
                            <li><a href="header-3.html">Header 3</a></li>
                            <li><a href="header-4.html">Header 4</a></li>
                            <li><a href="header-5.html">Header 5</a></li>
                          </ul>-->
                        </li>
                        <li><a href="about-us.php">About Us</a>
                          <!--<ul>
                            <li><a href="news-detail.html">News Detail</a></li>
                          </ul>-->
                        </li>
                        <li><a href="state.php">State</a>
                          <!--<ul>
                            <li><a href="event-right-sidebar.html">Event With Right Sidebar</a></li>
                            <li><a href="event-left-sidebar.html">Event With Left Sidebar</a></li>
                            <li><a href="single-event.html">Single Event</a></li>
                          </ul>-->
                        </li>
                        <li><a href="partners.php">Partners</a>
                          <!--<ul>
                            <li><a href="blog-with-right-sidebar.html">Blog With Right Sidebar</a></li>
                            <li><a href="blog-with-left-sidebar.html">Blog With Left Sidebar</a></li>
                            <li><a href="blog-with-double-sidebar.html">Blog With Double Sidebars</a></li>
                            <li><a href="blog-detail.html">Single Blog</a></li>
                          </ul>-->
                        </li>
                        <li><a href="blogs.php">Blogs</a></li>
                        <li><a href="contact-us.php">Contact Us </a></li>
                        
                        
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div> <strong class="copy">10 Bags &copy; 2014, All Rights Reserved, Design &amp; Developed By: <a href="http://www.webfries.com" class="web" target="_blank">Webfries</a></strong>
             <div class="footer-social-box pull-right">
              <ul>
                <li><a href="https://www.facebook.com/pages/Dare2Bherd/348432325355493?" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
               
                <li><a href="https://twitter.com/dare2bherd
https://plus.google.com/u/0/b/100278783797327067830/100278783797327067830/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--Footer Social End--> 
      
    </section>
    <!--Footer End--> 	 </div>
<!--Wrapper End--> 
<!--Jquery Js--> 
<script src="js/jquery.js" type="text/javascript"></script> 
<!--Bootstrap Js--> 
<script src="js/bootstrap.js" type="text/javascript"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.plugin.js"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.countdown.js"></script> 
<!--Bxslider Js--> 
<script src="js/jquery.bxslider.min.js"></script> 
<!--Filterable JS--> 
<script type="text/javascript" src="js/jquery-filterable.js"></script> 
<!--Flex Timeline JS--> 
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--Map Js--> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<!-- Style Switcher --> 
<script type="text/javascript" src="js/styleswitch.js"></script> 
<script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>  
<!--Pretty Photo Js--> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
<!--Costom Js--> 
<script src="js/custom.js" type="text/javascript"></script>
<script type="text/javascript" src="slider/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="slider/jquery.themepunch.revolution.js"></script>
<script type="text/javascript">
    var tpj=jQuery;
    tpj.noConflict();
    tpj(document).ready(function() {
      if (tpj.fn.cssOriginal!=undefined)
      tpj.fn.css = tpj.fn.cssOriginal;
      tpj('.fullwidthbanner').revolution({
        delay:4500,
        startwidth:1550,
        startheight:428,
        onHoverStop: "on",
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 3,
                hideThumbs: 200,
                navigationType: "bullet",
                navigationArrows: "verticalcentered",
                navigationStyle: "round",
                touchenabled: "on",
                navOffsetHorizontal: 0,
                navOffsetVertical: 20,
                stopAtSlide: -1,
                stopAfterLoops: -1,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                hideSliderAtLimit: 0,
                fullWidth: "on",
                shadow: 0
      });
    });
  </script>
</body>
</html>