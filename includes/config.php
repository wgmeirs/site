<?php
//	

//
session_start();
require_once "includes/inc.eden.php";  								// eden PHP library


//--------------------------------------------------------------------------
// General settings
//--------------------------------------------------------------------------

define("BFP_UPLOAD",	'uploads/', 		TRUE); 						// dir for upload files ->1st I must create it
define("BFP_ATTACH",	TRUE     , 		TRUE); 						// Attach+upload = True / Only Upload = false

$sendername          	= "yourname";
$senderemail 			= "youremail@domain.com";
$to 		 			= "bill.meirs@gmail.com";
$subject 	 			= "New email";


//--------------------------------------------------------------------------
// Database connection info - first user install_mysql.php / read help
//--------------------------------------------------------------------------
//$forms_mysql 			= false;									// Do you wan mysql register? ->1st install->install_mysql.php
//$forms_mysqltable_name  = "formspack_registermails";				// Name of table for registers contact forms
//
//define("BFP_CONN_HOST", 				'your_host', 		TRUE); 	    // mysql host www.yourdomain.com / localhost
//define("BFP_CONN_PORT", 				3306,               TRUE);		// port for mysql default 3306	
//define("BFP_CONN_USER", 				'your_user_mysql',  TRUE);		// mysql user
//define("BFP_CONN_PASS", 				'your_pass_mysal',  TRUE);		// mysql pass
//define("BFP_CONN_DB",   				'your_db_name',     TRUE);		// mysql database	 

?>