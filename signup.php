<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <!-- Title and other stuffs -->
      <title>petsavingsVT</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <!-- Stylesheets -->
      <!-- Bootstrap -->
      <link href="style/bootstrap.css" rel="stylesheet">
      <!-- Font awesome icon -->
      <link rel="stylesheet" href="style/font-awesome.css">
      <!-- Navigation menu -->
      <link rel="stylesheet" href="style/ddlevelsmenu-base.css">
      <link rel="stylesheet" href="style/ddlevelsmenu-topbar.css">
      <!-- cSlider -->
      <link rel="stylesheet" href="style/slider.css">
      <!-- PrettyPhoto -->
      <link rel="stylesheet" href="style/prettyPhoto.css">
      <!-- Custom style -->
      <link href="style/style.css" rel="stylesheet">
      <!-- Responsive Bootstrap -->
      <link href="style/bootstrap-responsive.css" rel="stylesheet">
      <!-- HTML5 Support for IE -->
      <!--[if lt IE 9]>
      <script src="js/html5shim.js"></script>
      <![endif]-->
      <!-- Favicon -->
      <link rel="shortcut icon" href="img/favicon/favicon.png">
   </head>
   <body>
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
                     <div class="logo-image"> <a href="indexpsvt.html"><img src="img/logofullcolor.png" alt="petsavingsVT logo"/></a> </div>
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
                           <li><a href="indexpsvt.html" class="borange"> <i class="icon-home"></i> Home</a></li>
                           <li>
                              <a rel="ddsubmenu2" class="bgreen"> <i class="icon-shopping-cart"></i> Deals Blog</a>
                              <!-- Sub Navigation -->
                              <ul id="ddsubmenu2" class="ddsubmenustyle">
                                 <li><a href="sb.html"><i class="icon-angle-right"></i>South Burlington</a></li>
                                 <li><a href="comingsoon.html"><i class="icon-angle-right"></i>Williston</a></li>
                                 <li><a href="comingsoon.html"><i class="icon-angle-right"></i>Essex</a></li>
                                 <li><a href="comingsoon.html"><i class="icon-angle-right"></i>Colchester</a></li>
                                 <li><a href="/psvt staging folder/site/dealpost/bootstrap_form_pack/"><i class="icon-angle-right bgreen"></i> Post a Deal!</a></li>
                              </ul>
                           </li>
                           <!-- Main navigation -->
                           <li><a href="about.html" class="blightblue"> <i class="icon-info-sign"></i> About</a>
                           </li>
                           <li><a href="contact.html" class="blightgray"> <i class="icon-envelope"></i> Contact</a>
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
                  <h2><?php
                     /* This code will make a connection with database */
                     $con=mysql_connect("localhost","root","root");
                      
                     /* Now, we select the database */
                     mysql_select_db("psvt");
                      
                     /* Now we will store the values submitted by form in variable */
                     $username=$_POST['username'];
                      
                     /* Now we will check if username is already in use or not */
                     $queryuser=mysql_query("SELECT * FROM subscribers WHERE username='$username' ");
                     $checkuser=mysql_num_rows($queryuser);
                     if($checkuser != 0)
                     { echo "Sorry, ".$username." is already been taken. Want to try again?"; }
                     else {
                      
                      
                     /* Now we will write a query to insert user details into database */
                     $insert_user=mysql_query("INSERT INTO subscribers (username) VALUES ('$username')");
                      
                     if($insert_user)
                     { echo "Thanks for signing up!"; }
                     else
                     { echo "something doesn't seem right, try again?".mysql_error(); }
                      
                     /* closing the if else statements */
                     }
                      
                     mysql_close($con);
                     ?></h2>
                  <a href="indexpsvt.com"> Back to Home/Signup Page </a>
                  <h3>Want to see some deals now??</h3>
                  <p><a href="sb.html">South Burlington</a></p>
                  <p>Williston</p>
                  <p>Essex </p>
                  <p>Colchester</p>
                  <!--begin media  --><!--end media-->
               </div>
               <!--content box--><!--end content box-->
               <!--social media-->
            </div>
         </div>
      </div>
      <!-- Content ends -->
      <!-- Footer --> 
      <!--banner-->
      <div class="foot">
         <img src="img/banner.png" alt="animals in banner"/> 
      </div>
      <!--banner ends-->
      <footer>
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="copy">
                     <p><a href="indexpsvt.html">Home</a> | <a href="about.html">About Us</a> |<a href="contact.html"> Contact Us</a></p>
                     <p>Copyright &copy;2013 petsavingsVT â�¢ Design by BRD Communications</p>
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
      <script src="js/filter.js"></script> <!-- Support -->
      <script src="js/custom.js"></script> <!-- Custom JS -->
   </body>
</html>