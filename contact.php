<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    $mail_to = 'bill.meirs@gmail.com'; 
 
    // Assigning data from the $_POST array to variables
    $name = $_POST['name'];
    $mail_from = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
 
    // Construct email subject
    $subject = 'Message from visitor ' . $name;
 
    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mail_from . "\r\n";
    $body_message .= 'Phone: ' . $phone . "\r\n";
    $body_message .= 'Message: ' . $message;
 
    // Construct email headers
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'indexpsvt.html';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator admin@admin.com');
        window.location = 'contact.html';
    </script>
    <?php
    }
?>


   </body>
</html>