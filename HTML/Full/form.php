<?php

     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "crunchpress@info.com";
    $email_subject = "New Membership Form Submission";
	$error_message = '';

     

     
    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['subject']) ||
		!isset($_POST['comments']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
     
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$subject = $_POST['subject']; // required
	$comments = $_POST['comments'];
	
     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>GOOD WILL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Custom Css-->
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!--Color Css-->
<link href="css/color-1.css" rel="stylesheet" type="text/css">
<!--Bootstrap 2.3.2-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--Bootstrap Responsive-->
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!--Responsive Queries-->
<link href="css/responsive-queries.css" rel="stylesheet" type="text/css">
<!--BxSlider Css-->
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<!-- Custom scrollbars CSS -->
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<!--Pretty Photo Css-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
<!--Audio Player Css-->
<link rel="stylesheet" href="css/audioplayer.css" />
<!--Font Awesome Css-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,600,700' rel='stylesheet' type='text/css'>
<!--HTML 5-->
<script src="js/html5.js"></script>
</head>
<body>
<!--Wrapper Start-->
<div id="wrapper"> 
  <!--Headre Start-->
  <header id="header"> 
    <!--Header Tobar Start-->
    <section class="header-topbar">
      <div class="container">
        <div class="row"> 
          <!--Topbar Navigation Start-->
          <div class="span6">
            <div class="topbar-nav">
              <ul>
                <li><a href="#">CrowdFunding</a></li>
                <li><a href="#">Members</a></li>
                <li><a href="#">Missions</a></li>
                <li><a href="#">Donation</a></li>
              </ul>
            </div>
          </div>
          <!--Topbar Navigation End--> 
          <!--Login Bar Start-->
          <div class="span6">
            <div class="login-bar">
              <ul>
                <li><a href="#"><i class="fa fa-sign-in"></i>Log in</a></li>
                <li><a href="#"><i class="fa fa-user"></i>Sign up</a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
              </ul>
            </div>
          </div>
          <!--Login Bar End--> 
        </div>
      </div>
    </section>
    <!--Header Tobar End--> 
    
    <!--Logo Row Start-->
    <section class="logo-row">
      <div class="container">
        <div class="row"> 
          <!--Topbar Address Area Start-->
          <div class="span4">
            <address class="topbar-address">
            <ul>
              <li><i class="fa fa-phone"></i>+1 4563 278910</li>
              <li><a href="#"><i class="fa fa-envelope"></i>info@charity.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>27 First St, NewYork, CA 94567, USA</a></li>
            </ul>
            </address>
          </div>
          <!--Topbar Address Area End--> 
          <!--Logo Start-->
          <div class="span4">
            <div class="logo-box"> <strong class="logo"><a href="index.html">Good<span>will</span></a></strong> <strong class="slogan">Nonprofit Multipurpose Theme</strong> </div>
          </div>
          <!--Logo End--> 
          <!--Top Social And Search Start-->
          <div class="span4">
            <div class="top-social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
              </ul>
              <form action="#" class="top-form">
                <input name="" required type="text" placeholder="Search Here...">
                <button type="submit" value=""><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <!--Top Social And Search End--> 
        </div>
      </div>
    </section>
    <!--Logo Row End--> 
    
    <!--Navigation Start-->
    <div class="navigation">
      <div class="container">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <div class="nav-collapse collapse">
              <nav>
                <ul class="nav">
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Home <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="index.html">Home Version 1</a></li>
                      <li><a href="index-politics.html">Home Version 2</a></li>
                      <li><a href="index-church.html">Home Version 3</a></li>
                      <li><a href="index-islamic.html">Home Version 4</a></li>
                      <li><a href="index-eco.html">Home Version 5</a></li>
                      <li><a href="index-causes.html">Home Version 6</a></li>
                      <li><a href="index-store.html">Home Version 7</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="about.html">About <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="about.html">About Version 1</a></li>
                      <li><a href="about-2.html">About Version 2</a></li>
                      <li><a href="about-3.html">About Version 3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="events.html">Events <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="events.html">Events</a></li>
                      <li><a href="event-detail.html">Event Detail</a></li>
                      <li><a href="event-locator.html">Event Locator</a></li>
                      <li><a href="event-calendar.html">Event Calendar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="blog.html">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="news.html">News<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="news.html">News</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="gallery-2-column.html">Gallery <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="gallery-2-column.html">Gallery Two Column</a></li>
                      <li><a href="gallery-3-column.html">Gallery Three Column</a></li>
                      <li><a href="gallery-4-column.html">Gallery Four Column</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Shortcodes <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Shop <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="products.html">Products</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="causes.html">Causes</a></li>
                      <li><a href="causes-details.html">Causes Details</a></li>
                      <li><a href="causes-listings.html">Causes Listings</a></li>
                      <li><a href="naat.html">Naat</a></li>
                      <li><a href="naat-detail.html">Naat Detail</a></li>
                      <li><a href="services.html">Services 1</a></li>
                      <li><a href="services-2.html">Services 2</a></li>
                      <li><a href="team.html">Team</a></li>
                      <li><a href="team-detail.html">Team Detail</a></li>
                      <li><a href="testimonials.html">Testimonials</a></li>
                      <li><a href="sign-up.html">Sign Up</a></li>
                      <li><a href="login.html">Login</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a  data-toggle="dropdown" class="dropdown-toggle" href="contact-1.html">Contact<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="contact-1.html">Contact 1</a></li>
                      <li><a href="contact-2.html">Contact 2</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Navigation End--> 
    
  </header>
  <!--Headre End-->
  
  <div id="main"> 
    <!-- Start of Thank -->
    <section id="content_Wrapper" class="mbtm">
      <section class="container container-fluid">
        <section class="row-fluid">
          <section class="span12 error-page">
            <div class="holder">
              <h2>Thank You</h2>
              <p>Thank you for your form submission, as soon as we get this we will get back to you shortly.</p>
            </div>
          </section>
        </section>
      </section>
    </section>
    <!-- End of Thank --> 
    <!--Footer Start-->
    <footer id="footer"> 
      <!--Footer Section 1 Start-->
      <section class="footer-section-1">
        <div class="container">
          <div class="row">
            <div class="span3">
              <div class="box">
                <h2><span>Good</span>will</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making.</p>
                <p>t look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default.</p>
              </div>
            </div>
            <div class="span3">
              <div class="box">
                <h2>Recent Posts</h2>
                <ul>
                  <li> <strong class="date">22<span>nov</span></strong>
                    <div class="text-box"> <strong class="title">Donec vel leo sagittis
                      luctus nibh quis</strong> <a href="#"><i class="fa fa-comments-o"></i>31 Comments</a> </div>
                  </li>
                  <li> <strong class="date">30<span>cot</span></strong>
                    <div class="text-box"> <strong class="title">Morbi ullamcorper
                      justo eu lobortis</strong> <a href="#"><i class="fa fa-comments-o"></i>44 Comments</a> </div>
                  </li>
                  <li> <strong class="date">27<span>sep</span></strong>
                    <div class="text-box"> <strong class="title">Praesent a metus eu nisi
                      mattis commodo</strong> <a href="#"><i class="fa fa-comments-o"></i>87 Comments</a> </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="span3">
              <div class="box">
                <h2>Tweets</h2>
                <div class="twitter-box arrow-1"> <strong class="name">@johndoe</strong>
                  <p>It has survived not only five centuries, but also the leap into...</p>
                  <a href="#">themeforest.net/item/goodwill</a> </div>
                <div class="twitter-box arrow-2"> <strong class="name">@johndoe</strong>
                  <p>when an unknown printer took a galley of type and scrambled...</p>
                  <a href="#">themeforest.net/item/goodwill</a> </div>
              </div>
            </div>
            <div class="span3">
              <div class="box">
                <h2>Flickr Photos</h2>
                <div class="flicker-box">
                  <ul class="gallery">
                    <li><a href="images/flicker/flicker-img-1.jpg"  data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-1.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-2.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-2.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-3.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-3.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-4.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-4.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-5.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-5.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-6.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-6.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-7.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-7.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-8.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-8.jpg" alt="img"></a></li>
                    <li><a href="images/flicker/flicker-img-9.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/flicker/flicker-img-9.jpg" alt="img"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Footer Section 1 End--> 
      
      <!--Footer Section 2 Start-->
      <section class="footer-section-2">
        <div class="container">
          <div class="row">
            <div class="span6"><strong class="copy">GoodWill &copy; 2014, All Rights Reserved, Design &amp; Developed By: <a href="http://crunchpress.com/" target="_blank">CrunchPress</a></strong></div>
            <div class="span6">
              <div class="footer-nav">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Footer Section 2 End--> 
    </footer>
    <!--Footer End--> 
  </div>
</div>
<!--Wrapper End--> 
<!--jQuery Start--> 
<!--JQuery 1.11.1 Js--> 
<script src="js/jquery.js"></script> 
<!--Bootstrap Js--> 
<script src="js/bootstrap.min.js"></script> 
<!--BxSlider Js--> 
<script src="js/jquery.bxslider.min.js"></script> 
<!--Parallax Effect Js--> 
<script src="js/jquery.stellar.min.js"></script> 
<!--Map Js--> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<!-- custom scrollbars--> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<!--Background Moving Start--> 
<script src='js/bg-moving.js'></script> 
<!--Pretty Photo Js--> 
<script src="js/jquery.prettyPhoto.js"></script> 
<!--Accordion JS--> 
<script src="js/jquery.accordion.js"></script> 
<!--MP3 Player JS--> 
<script src="js/audioplayer.js"></script> 
<script>$( function() { $( 'audio' ).audioPlayer(); } );</script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.plugin.js"></script> 
<!--Upcoming News Times Js--> 
<script src="js/jquery.countdown.js"></script> 
<!--Custom Js--> 
<script src="js/custom.js"></script> 
<!--jQuery End-->
</body>
</html>
