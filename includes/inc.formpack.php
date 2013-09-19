<?php
require_once "inc.eden.php";
require_once 'class.phpmailer.php';

/////////////////////////////////////////////////////////////////////////////////////
// FormPack
/////////////////////////////////////////////////////////////////////////////////////

class formpack
	{
 	public $upload_path;
	public $message;
	public $upload_error_msg;
	/**
	*
	*/	
	public function __construct()
    {
	if (isset($_POST)) {
		$text="";
		foreach($_POST as $name=>$value) {
			if ( ($name=='tok') ) { // filter
				} else {
				$text .= $name.": ".$value."<br>";			
				} 
			}
		
		
		// files
		if (isset($_FILES)) {
			foreach($_FILES as $name=>$file){
				$upload = new uploadHandler();				// Yes, upload a file
				$upload->setPath(BFP_UPLOAD);				// Set path from config file
				$upload->setFilePrefix('');					// Prefix the file name
				$upload->setInput($name); 					// form property name 
				$upload->setAllowed( array('types'=>array('png','jpg','gif','pdf','txt','doc')) ); // set extensions allowed
				$upload->upload();
				// error control 
				if ($upload->output<>"Upload success!"){ 
										 echo $upload->output; 
										
										 $this->setUpload_error_msg( $upload->output );
										 }
				$this->setUpload_error_msg( $upload->output );					 
				
				$text .= "upload:".$_FILES[$name]["name"]."<br>";
				}
			
			}
		$this->message=$text;
		
		}
	}
	function setPath($var){
        $this->upload_path = $var;
    }
	function setUpload_error_msg($var){
        $this->upload_error_msg = $var;
    }
	function getUpload_error_msg($var){
       return $this->upload_error_msg;
    }

}

/////////////////////////////////////////////////////////////////////////////////////
// Upload file
/////////////////////////////////////////////////////////////////////////////////////
Class uploadHandler{
    public $upload_path;
    public $full_path;
    public $name;
    public $size;
	public $maxsize;
    public $ext;
    public $output;
    public $input;
    public $prefix;
    private $allowed;

    function upload(){
		$this->output = 'Upload success!'; 
        if($_SERVER['REQUEST_METHOD'] == 'POST' && (strlen($_FILES[$this->input]['tmp_name'])>3) ){
			
			// correct file size ?
			if (isset($_POST['MAX_FILE_SIZE']) && ($_POST['MAX_FILE_SIZE'] < filesize($_FILES[$this->input]['tmp_name']))) {
					$_FILES[$this->input]['error']=2;
					}
			// correct extensions ?	
			$this->name      = basename($_FILES[$this->input]['name']); 
			$file_p = explode('.', $this->name);
            $this->ext = end($file_p);	
						
			if (!in_array( $this->ext ,$this->allowed['types'])) {
				$_FILES[$this->input]['error']=9; //File not supported!
				}
			
            if(isset($_FILES[$this->input]['error'])){
                if($_FILES[$this->input]['error'] == 0){
                                       
                    //$this->full_path = rtrim($this->upload_path,'/').'/'.preg_replace('/[^a-zA-Z0-9.-]/s', '', $this->prefix.''.$file_p[0]).'.'.$this->ext;
					$this->full_path = rtrim($this->upload_path,'/').'/'. $this->prefix.''.$file_p[0].'.'.$this->ext;
                    $info            = getimagesize($_FILES[$this->input]['tmp_name']);
                    $this->size      = filesize($_FILES[$this->input]['tmp_name']);

					
                    	
							// echo $this->maxsize. " real->".$this->size ;
							// echo $_FILES[$this->input]['name'];
							 
				   move_uploaded_file($_FILES[$this->input]['tmp_name'],$this->full_path);
                   $this->output = 'Upload success!';
					
                }else{
					// Errors
                    if($_FILES[$this->input]['error']==1){$this->output = 'The uploaded file exceeds the upload_max_filesize directive!';}
                    if($_FILES[$this->input]['error']==2){$this->output = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in our HTML form!';}
                    if($_FILES[$this->input]['error']==3){$this->output = 'The uploaded file was only partially uploaded!';}
                    if($_FILES[$this->input]['error']==4){$this->output = 'No file was uploaded!';}
                    if($_FILES[$this->input]['error']==6){$this->output = 'Missing a temporary folder!';}
                    if($_FILES[$this->input]['error']==7){$this->output = 'Failed to write uploaded file to disk!';}
                    if($_FILES[$this->input]['error']==8){$this->output = 'A PHP extension stopped the file upload!';}
					if($_FILES[$this->input]['error']==9){$this->output = 'Extension not supported!';}
                }
            }
        }
    }

    function setPath($var){
        $this->upload_path = $var;
    }
    function setAllowed($var=array()){
        $this->allowed = $var;
    }
	function setMaxSize($var){
        $this->maxsize = $var;
    }
    function setFilePrefix($var){
        $this->prefix = preg_replace('/[^a-zA-Z0-9.-]/s', '_', $var);
    }
    function setInput($var){
        $this->input = $var;
    }

}

/////////////////////////////////////////////////////////////////////////////////////
// formtoken
/////////////////////////////////////////////////////////////////////////////////////
class formtoken
{
    const FIELDNAME = 'tok';
    const DO_NOT_CLEAR = FALSE;

   /**
   * Make token
   * apply into form: < ?php echo formtoken::getField() ? >
   */
    public static function getField()
    {
        $token = self::_generateToken();
        return "<input name='" . self::FIELDNAME . "' value='{$token}' type='hidden' />";
    }
   /**
   * Validate
   * if (formtoken::validateToken($_POST)) {
   * } else {
   * die('The form is not valid or has expired.');
   * }
   */
    public static function validateToken($request, $clear = true)
    {
        $valid = false;
        $posted = isset($request[self::FIELDNAME]) ? $request[self::FIELDNAME] : '';

        if (!empty($posted)) {
            if (isset($_SESSION['formtoken'][$posted])) {
                 if ($_SESSION['formtoken'][$posted] >= time() - 7200) {
                    $valid = true;
                 }
                 if ($clear) unset($_SESSION['formtoken'][$posted]);
            }
        }

        return $valid;
    }

    protected static function _generateToken()
    {
        $time = time();
        $token = sha1(mt_rand(0, 1000000));
        $_SESSION['formtoken'][$token] = $time;
        return $token;
    }
}
