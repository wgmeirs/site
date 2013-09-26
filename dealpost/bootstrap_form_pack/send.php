<?php 
require_once "includes/config.php";		    // form pack library settings <- first config this file
require_once "includes/inc.formpack.php"; 	// form pack library
require_once "includes/inc.eden.php";  		// eden PHP library
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <div class="container">

            <div class="hero-unit">
              	<?php
							
				
					$msg = new formpack(); 						// init obj
					
					$message= $msg->message;					// get messaje from form or upload files
					
					$mail = new PHPMailer;						// init obj
					
					$mail->From 		= $senderemail;			// defined in config.php
					$mail->FromName 	= $sendername ; 		// defined in config.php
					$mail->AddAddress ($to , $to);  			// Add a recipient - defined in config.php
					
					//$mail->AddReplyTo('info@example.com', 'Information');
					//$mail->AddCC('cc@example.com');
					//$mail->AddBCC('bcc@example.com');

					$mail->WordWrap = 50;                       // Set word wrap to 50 characters
					//attach to mail ??
					if (BFP_ATTACH) {
						if (isset($_FILES)) {
							foreach($_FILES as $name=>$file){
								
								$mail->AddAttachment(BFP_UPLOAD.$_FILES[$name]["name"], $_FILES[$name]["name"]);   // attach files
								
							}
						}
						
						
					}
					
					$mail->IsHTML(true);                  		 // Set email format to HTML
		
					$mail->Subject = $subject; 					 // defined in config.php
					$mail->Body    = $message;

					
					
					$cansend=1;
					// resend option;
					if (!formtoken::validateToken($_POST)) { echo ("<h2>Resend dont allowed</h2>"); $cansend=0; }		
					// error uploading ..
					//if (isset($_FILES) && ( $msg->getUpload_error_msg() <> "Upload success!")) { echo $upload->output; $cansend=0; }
					
					// then send ...
					if ( $cansend ) { 
								if ( $mail->Send() ){
									echo ("<p>Thanks for your post. We will review for standards control and post if approved!</p>"); 
									} else {
									echo ("<h2>Error Message could not be sent. </h2>" . $mail->ErrorInfo );  
									}  
								}
					 
                 
				 ?>
            </div>

            <div class="row"></div>
    </div> 
        <!-- /container -->
        <script>
        setTimeout(function(){ window.location.href = "index.php"; },5000);
		</script> 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34738525-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>

