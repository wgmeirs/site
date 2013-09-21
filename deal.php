<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    $mail_to = 'bill.meirs@gmail.com'; 
 
    // Assigning data from the $_POST array to variables
    $name = $_POST['name'];
    $business = $_POST['business'];
    $deal = $_POST['deal'];
    $file = $_POST['filename'];
 
    // Construct email subject
    $subject = 'Message from visitor ' . $name;
 
    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message = 'Business: ' . $business . "\r\n";
    $body_message = 'deal: ' . $deal . "\r\n";
    $body_message = 'file: ' . $file . "\r\n";
	$mail_from = $_POST['email'];

 
    // Construct email headers
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the post. We will review and post shortly!');
        window.location = 'indexpsvt.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator admin@admin.com');
        window.location = '/psvt staging folder/site/dealpost/bootstrap_form_pack/.html';
    </script>
    <?php
    }
?>


   </body>
</html>