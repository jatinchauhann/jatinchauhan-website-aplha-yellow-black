<?php

// Replace this with your own email address



if($_POST) {
    
   $to = trim(stripslashes($_POST['to']));
   $from = trim(stripslashes($_POST['from']));
   $subject = trim(stripslashes($_POST['subject']));
   $message = trim(stripslashes($_POST['message']));


   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $to . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   //if (@mail($siteOwnersEmail,$subject,$message,$headers)) {

     // ini_set("sendmail_from", $siteOwnersEmail);  for windows server
      //$mail = mail($siteOwnersEmail, $subject, $message, $headers);

	if (@mail($to,$subject,$message,$headers)) { 
		echo "OK"; 
	}
      else { 
		echo "Something went wrong. Please try again.";
	 }
		
	//} # end if - no validation error

	//else {
	//
	//	$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
	//	$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
	//	$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
	//	
	//	echo $response;
	//
	//} # end if - there was a validation error

}
$redir = "http://jatinchauhan.in/sendmail";
header('Location: '. $redir);
?>
