<?php 
require_once "includes/config.php";		    // form pack library settings <- first config this file
require_once "includes/inc.formpack.php"; 	// form pack library
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
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!-- validate -->
<link rel="stylesheet" href="js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>

</head>
<body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<div class="content" style="padding-top: 30px;" >
  <div class="span12">
    <h2>Upload form 1</h2>
    <div class="row">
      <div class="span3">
          <form action="send.php" method="post" enctype="multipart/form-data" id="form">
          <label>First Name*</label>
          <input type="text" value="" class="span3 validate[required]" name="firstname" id="firstname" placeholder="First Name">
          <label>Last Name</label>
          <input type="text" value="" class="span3" name="lasnamename" id="lasnamename" placeholder="Last Name">
          <label>Email</label>
          <input type="text" value="" class="span3" name="email" id="email" placeholder="Email">
          <label>Comments</label>
          <textarea rows="3" class="span3" name="comments" id="comments" placeholder="Comments" value=""></textarea>
          <label>Upload file</label>
		  <input type="file" name="file" id="file" title="Search for a file to add" style="margin-bottom: 20px;">
          <div style="padding-top: 15px;">
          <button id="contact-submit" type="submit" class="btn btn-primary input-medium">Send</button>
          </div>
          <?php echo formtoken::getField() ?>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /container --> 

<script src="js/vendor/jquery-1.9.1.min.js"></script> 
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/main.js"></script>
<script src="js/file-input/bootstrap.file-input.js"></script>
<!-- validate -->
<script src="js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
jQuery(document).ready(function(){
	jQuery("#form").validationEngine();
	});
</script>

</body>
</html>

