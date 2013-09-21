<?php 
require_once "includes/config.php";		    
require_once "includes/inc.formpack.php"; 	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>petsavingsVT - post a deal!</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link href="style/bootstrap.css" rel="stylesheet">
      <!-- Font awesome icon -->
      <link rel="stylesheet" href="style/font-awesome.css">
      <!-- Navigation menu -->
      <link rel="stylesheet" href="style/ddlevelsmenu-base.css">
      <link rel="stylesheet" href="style/ddlevelsmenu-topbar.css">
      
      <!-- Custom style -->
      <link href="style/style.css" rel="stylesheet">
      <!-- Responsive Bootstrap -->
      <link href="style/bootstrap-responsive.css" rel="stylesheet">
      <!-- HTML5 Support for IE -->
      <!--[if lt IE 9]>
      <script src="js/html5shim.js"></script>
      <![endif]-->
      <!-- Favicon -->
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!-- validate -->
<link rel="stylesheet" href="js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
 <link rel="shortcut icon" href="img/favicon/favicon.png">

</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!-- top space-->
      <div class="slidepanel">
         <div class="container">
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- top space ends-->
      <!-- Header starts -->
      <header>
         <div class="container">
            <div class="row">
               <div class="span3">
                  <!-- Logo starts -->
                  <div class="logo">
                     <div class="logo-image"> <a href="../../indexpsvt.html"><img src="img/logofullcolor.png" alt="petsavingsVT logo"/></a> </div>
                     <div class="clearfix"></div>
                  </div>
                  <!-- Logo ends -->
               </div>
               <div class="span9">
                  <!-- Navbar starts -->
                  <div class="navi pull-right">
                     <div id="ddtopmenubar" class="mattblackmenu">
                        <!-- Main navigation -->
                        <ul>
                           <li><a href="../../indexpsvt.html" class="borange"> <i class="icon-home"></i> Home</a></li>
                           <li>
                              <a href="../../indexpsvt.html" rel="ddsubmenu2" class="bgreen"> <i class="icon-shopping-cart"></i> Deals Blog</a>
                              <!-- Sub Navigation -->
                              <ul id="ddsubmenu2" class="ddsubmenustyle">
                                 <li><a href="../../sb.html"><i class="icon-angle-right"></i>South Burlington</a></li>
                                 <li><a href="../../comingsoon.html"><i class="icon-angle-right"></i>Williston</a></li>
                                 <li><a href="../../comingsoon.html"><i class="icon-angle-right"></i>Essex</a></li>
                                 <li><a href="../../comingsoon.html"><i class="icon-angle-right"></i>Colchester</a></li>
                                 <li><a href="/psvt staging folder/site/dealpost/bootstrap_form_pack/"><i class="icon-angle-right bgreen"></i> Post a Deal!</a></li>
                              </ul>
                           </li>
                           <!-- Main navigation -->
                           <li><a href="../../about.html" class="blightblue"> <i class="icon-info-sign"></i> About</a>
                           </li>
                           <li><a href="../../contact.html" class="blightgray"> <i class="icon-envelope"></i> Contact</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="navis"></div>
                  <!-- Navbar ends -->
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </header>
      <div class="clearfix"></div>
      <!-- Header ends -->
      <!-- Content starts -->
      <div class="content">
         <div class="container">
            <!--Main Content Area
               -->
            <div class="row-fluid span12">
               <div class="span5">
                 <h2>Post a Deal!</h2>
                  <div class="form">
    <form action="send.php" method="post" enctype="multipart/form-data" id="form">
          <label>Name*</label>
          <input type="text" value="" class="span12 validate[required]" name="firstname" id="firstname" placeholder="First Name">	
          <label>Business Name</label>
          <input type="text" value=""   class="span12" name="lasnamename" id="lasnamename" placeholder="Last Name">
          <label>Email</label>
          <input type="text" value="" class="span12" classname="email" id="email" placeholder="Email">
          <label>Deal</label>
          <textarea rows="3" class="span12" name="comments" id="comments" value=""></textarea>
          <label>Upload file</label>
		  <input type="file" name="file" id="file"  class="span12" title="Search for a file to add" style="margin-bottom: 20px;">
          <div style="padding-top: 15px;">
          <button type="submit" class="btn btn-warning">Submit</button>
                           <button type="reset" class="btn btn-inverse">Reset</button>
          </div>
          <?php echo formtoken::getField() ?>
        </form>
        
  </div>
</div>
<div class="span5 offset2">
                  <div class="contBox">
                     <h2>News</h2>
                     <h4>Essex Dog Park Grand Opening!</h4>
                     <p>It's Finally Here! Essex Dog Park will be celebrating its Grand Opening this Saturday, June 29th from 10am to noon. </p>
                     <p>We will have a leash cutting ceremony, refreshments and a treat, for both you and your pup! We hope you and your dog(s) can be there to celebrate with us as our park transistions from the planning stages to dogs running and playing.          </p>
                     <p>Also if you havn't already please like us on our Facebook Page <a href="http://facebook.com/EssexDogPark">www.facebook.com/EssexDogPark </a>to stay up to date with all the latest information, news, and pictures from the park!</p>
                     <div class="media">
                        <div class="media-body">
                        </div>
                        <a class="pull-right" href="#">
                        <img class="media-object" src="img/newsdoggie.gif" alt="dog">
                        </a>
                     </div>
                  </div>
                  <div class="span12">
                     <h4>Find, Follow and Like!</h4>
                     <ul id="gallery_photos">
                        <li><a href="http://linkedin.com/in/billmeirsrecruiter/"><img src="img/linkedin.gif" alt="Linkedin"/></a></li>
                        <li><a href="https://www.facebook.com/bmeirs"><img src="img/facebook.gif" alt="Facebook"/></a></li>
                        <li><a href="http://twitter.com/wgmeirs"><img src="img/twitter.gif" alt="Twitter"/></a></li>
                        <li><a href="https://plus.google.com/u/0/116834960053162148377/posts"><img src="img/google.gif" alt="Google"/></a></li>
                     </ul>
                  </div>
               </div>
               <!--end content box-->
               <!--social media-->
            </div>
         </div>
      </div>
      <!-- Content ends -->
      <!-- Footer --> 
      <!--banner-->
      <div class="foot">
         <img src="img/banner.png" alt="animals"/> 
      </div>
      <!--banner ends-->
      <footer>
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="copy">
                     <p><a href="../../indexpsvt.html">Home</a> | <a href="../../about.html">About Us</a> |<a href="../../contact.html"> Contact Us</a></p>
                     <p>Copyright &copy; 2013 petsavingsVT • Design by BRD Communications</p>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </footer>
<!-- JS -->
      <script src="js/jquery.js"></script> <!-- jQuery -->
      <script src="js/bootstrap.js"></script> <!-- Bootstrap -->
      <script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
      <script src="js/jquery.isotope.js"></script> <!-- isotope -->
      <script src="js/ddlevelsmenu.js"></script> <!-- Navigation menu -->
      <script src="js/jquery.cslider.js"></script> <!-- jQuery cSlider -->
      <script src="js/modernizr.custom.28468.js"></script> <!-- Extra script for cslider -->
      <script src="js/custom.js"></script> <!-- Custom JS -->
<!-- validate -->
<script src="js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script>
jQuery(document).ready(function(){
	jQuery("#form").validationEngine();
	});
</script>
</body>
</html>

