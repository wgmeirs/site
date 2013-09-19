<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <!-- Title and other stuffs -->
      <title>petsavingsVT - post a deal!</title>
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
                              <a href="indexpsvt.html" rel="ddsubmenu2" class="bgreen"> <i class="icon-shopping-cart"></i> Deals Blog</a>
                              <!-- Sub Navigation -->
                              <ul id="ddsubmenu2" class="ddsubmenustyle">
                                 <li><a href="sb.html"><i class="icon-angle-right"></i>South Burlington</a></li>
                                 <li><a href="comingsoon.html"><i class="icon-angle-right"></i>Williston</a></li>
                                 <li><a href="comingsoon.html"><i class="icon-angle-right"></i>Essex</a></li>
                                 <li><a href="comingsoon.html"><i class="icon-angle-right"></i>Colchester</a></li>
                                 <li><a href="post.html"><i class="icon-angle-right bgreen"></i> Post a Deal!</a></li>
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
                 <?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 80000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Thanks for your file!" ."<br>";
	echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?> 


              </div>
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
         <img src="img/banner.png" alt="animals"/> 
      </div>
      <!--banner ends-->
      <footer>
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="copy">
                     <p><a href="index.html">Home</a> | <a href="aboutus.html">About Us</a> |<a href="contactus.html"> Contact Us</a></p>
                     <p>Copyright &copy;2013 petsavingsVT • Design by BRD Communications</p>
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

