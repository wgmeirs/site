<p style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<strong>Bootstrap Form Pack installation</strong><br />
a codecanyon.net product<br />
by Aenea www.aenea.pro <br /><br />

<? 
require_once "includes/config.php"; 
$link = mysql_connect(BFP_CONN_HOST,BFP_CONN_USER,BFP_CONN_PASS) or die ("Err: data connection");  
mysql_select_db(BFP_CONN_DB,$link) or die ("Err: db selector");

if (tableExists($forms_mysqltable_name)) {
	// Already exist //////////////////////////////////////////////
	echo "Table ".$forms_mysqltable_name." already exist. Delete this file install_mysql.php";
	} else {
	// Make table /////////////////////////////////////////////////
	
	$sql="CREATE TABLE ".$forms_mysqltable_name."  (
	     id INT NOT NULL AUTO_INCREMENT, 
		 datenow DATE default NULL,
		 mailto TEXT NULL, 
		 email TEXT NULL, 
		 PRIMARY KEY ( id ) )";
	$result=mysql_query($sql,$link);
				
	echo "Table ".$forms_mysqltable_name." created<br><strong>Delete this file install_mysql.php</strong><br><span style='color:#ff0000'>Installation DONE!</span><br>Thanks for the purchase!";
}

		
// Functions /////////////////////////////////////////////////		
function tableExists($tableName)
{ 

	if( mysql_num_rows( mysql_query("SHOW TABLES LIKE '" . $tableName . "'")))
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}

?>
</p>