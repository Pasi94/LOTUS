<?php 
if(isset($_POST['submit'])){
    $to = "lotusdesignlk@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />`

<title>LOTUS Design</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">


<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s6.addthis.com/js/154/addthis_widget.js#pubid=rd-39e8r89e9er8er989"></script>
<!-- AddThis Button END -->

<meta property="og:url" content="http://www.lotusdesign.tk" />
<meta property="og:title" content="LOTUS Design Company" />
<meta property="og:description" content="Example Title Description" />
<!--- <meta property="og:image" content="http://www.example.com/logo.gif" /> --!>
 



<!-- STYLESHEET CSS FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">
<link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- preloader section -->
<div class="preloader">
  <div class="sk-spinner sk-spinner-rotating-plane"></div>
</div>
<!-- home section -->
<section id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <a href="#intro" class="btn btn-default smoothScroll">GET STARTED</a></div>
    </div>
  </div>
</section>
<!-- navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <a  href="#" class="navbar-brand">LOTUS</a> </div>	  
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="smoothScroll">HOME</a></li>
        <li><a href="#intro" class="smoothScroll">INTRO</a></li>
        <li><a href="#work" class="smoothScroll">WORK</a></li>
        <li><a href="#team" class="smoothScroll">TEAM</a></li>
		<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
	  </ul>
    </div>
  </div>
</div>
<!-- intro section -->
<section id="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-md-offset-3  col-sm-offset-2 col-sm-8 col-sm-offset-2 title">
        <h4>WELCOME TO LOTUS</h4>
        <h2>Designing &amp; Developing</h2>
        <hr>
		<p>Vision<br>To Be leading IT enabled service provider in the field of  IT Solution and Graphic Design. <br>
		<br> Mission<br>To enhance our clients and build an Enduring relationship by increasing their business share through premium quality service.</p>
		<p></p>
      </div>
    </div>
  </div>
</section>
<!-- work section -->
<section id="work">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 title">
        <h2>Service</h2>
        <hr>
        <p>Graphic and Media Design, Video Design, Social Media Management and Android, Web Development.</p>
      </div>
      <div class="col-md-8 col-sm-8">
        <div class="col-md-6 col-sm-6 bg-black"> <i class="fa fa-image"></i>
          <h3>Graphic Design</h3>
        </div>
        <div class="col-md-6 col-sm-6 bg-red"> <i class="fa fa-share-alt"></i>
          <h3>Social Media Management</h3>
        </div>
        <div class="col-md-6 col-sm-6 bg-red"> <i class="fa fa-desktop"></i>
          <h3>Video Design</h3>
        </div>
        <div class="col-md-6 col-sm-6 bg-black"> <i class="fa fa-html5"></i>
          <h3>Web Development</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- team section -->
<!-- <section id="team">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-md-offset-3  col-sm-offset-2 col-sm-8 col-sm-offset-2 title">
        <h2>Our team</h2>
        <hr>
        <p>We love to work with our clients from the start. Whether you’re creating a new brand or looking to reposition an existing one, successful brands are built on great stories.</p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.9s"><img src="images/team1.jpg" class="img-responsive" alt="team img">
        <div class="team-des">
          <h3>Pasindu Purna</h3>
          <h5>CO-Founder & CEO</h5>
        </div>
      </div>
	  <div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.9s"><img src="images/team2.jpg" class="img-responsive" alt="team img">
        <div class="team-des">
          <h3>Sahan Thinusha</h3>
          <h5>CTO & Project Manager</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.3s"><img src="images/team3.jpg" class="img-responsive" alt="team img">
        <div class="team-des">
          <h3>Lakshan Chandima</h3>
          <h5>CMO</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.6s"><img src="images/team4.jpg" class="img-responsive" alt="team img">
        <div class="team-des">
          <h3>Sandun Sandamal</h3>
          <h5>Designer</h5>
        </div>
      </div>
	  <div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.6s"><img src="images/team5.jpg" class="img-responsive" alt="team img">
        <div class="team-des">
          <h3>Sadeep Hasanga</h3>
          <h5>Designer</h5>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!-- contact section -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-md-offset-3  col-sm-offset-2 col-sm-8 col-sm-offset-2 title">
        <h2>Contact Us</h2>
        <hr>
        <p>Do you need to know anything..? Feel free to contact us. <br> Email :- info@lotusdesignlk.com <br> Mobile :- 0710452620 / 0769102620</p>		
      </div>
      <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 contact-form wow fadeInUp" data-wow-delay="0.9s">
        <form action="" method="post">
			<input type="text" name="first_name" class="form-control" placeholder="First Name">
			<input type="text" name="last_name" class="form-control" placeholder="Last Name"> 
			<input type="text" name="email" class="form-control" placeholder="Email">
			<textarea name="message" class="form-control" placeholder="Message" rows="6"></textarea>
			<input type="submit" name="submit" class="form-control" value="Submit">
		</form>
      </div>
    </div>
  </div>
</section>
<!-- footer section -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2 class="wow fadeIn" data-wow-delay="0.9s">Follow Us</h2>
        <ul class="social-icon">
          <li><a href="https://www.facebook.com/LOTUSDesign.lk/" target="_blank" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
          <li><a href="https://twitter.com/lotusdesignlk" target="_blank" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
          <li><a href="https://www.behance.net/lotusdesigf34e" target="_blank" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://dribbble.com/lotusdesignlk" target="_blank" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://github.com/lotusdesignlk" target="_blank" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://www.youtube.com/channel/UCUOf9P9VzHGic4xRXnp21LQ" target="_blank" class="fa fa-youtube wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-instagram wow bounceIn" data-wow-delay="0.9s"></a></li>
		  <li><a href="https://www.linkedin.com/in/lotusdesignlk" target="_blank" class="fa fa-linkedin wow bounceIn" data-wow-delay="0.9s"></a></li>
		  <li><a href="https://plus.google.com/u/2/116950765287308699145" target="_blank" class="fa fa-google-plus wow bounceIn" data-wow-delay="0.9s"></a></li>
        </ul>
      </div>
      <div class="col-md-12 col-sm-12 copyright">
        <p>&copy; <a href="http://lotusdesignlk.com">LOTUS Design</a> 2014-2017, All Rights Reserved. Designed by & Developed by <a href="http://lotusdesignlk.com">LOTUS Design</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- JAVASCRIPT JS FILES --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/nivo-lightbox.min.js"></script> 
<script src="js/smoothscroll.js"></script> 
<script src="js/jquery.sticky.js"></script> 
<script src="js/jquery.parallax.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>