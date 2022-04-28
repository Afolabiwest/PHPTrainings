<?php

// DECLARING VARIABLE FOR FORM FIELDS ENTRIES
$name 		= "";
$email 		= "";
$message 	= "";
$response 	= "";


if ( isset( $_POST["name"] ) ) { // CHECKING TO SEE IF FORM CONTAINING FIELD "name" HAS BEEN SUBMITTED
	
	// 	"strip_tags" AND "htmlentities"  PHP INBUILT FUNCTION SANITIZED THE FORM ENTRIES MAKING SURE 
	//	THEY DO NOT HAVE MALICIOUS CONTENTS
	
	$name 		= strip_tags( htmlentities( $_POST["name"] ) );
	$email 		= strip_tags( htmlentities( $_POST["email"] ) );
	$message 	= strip_tags( htmlentities( $_POST["message"] ) );
	
	if( empty( $name ) or empty( $email ) or empty( $message ) ){ // CHECKING TO MAKE SURE NO FIELD IS EMPTY
		$response = '<strong style="color:#f00;">Complete all required fields.</strong><br>';
		
		if( empty( $name ) ){
			$response .= "*Enter full name.<br>";
		}
	
		if( empty( $email ) ){
			$response .= "*Enter email.<br>";
		}
	
		if( empty( $message ) ){
			$response .= "*Enter message.<br>";
		}
	
	}else{
		
		// SENDING MAIL STARTS HERE
		$to      = "info@example.com";
		$subject = "Contact Message";
		$txt 	 = "Message from " . $name . " width email address " . $email;
		$txt 	.= "<br>";
		$txt 	.= $message;
		
		$headers  = "MIME-Version: 1.0: " . "\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$headers .= "From: support@example.com" . "\r\n";
		$headers .= "CC: hello@example.com" . "\r\n";
		$headers .= "Reply-To: " . $email . "\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
		
		
		mail( $to, $subject, $txt, $headers );
		// SENDING MAIL ENDS HERE
		
		// SHOWING RESPONSE MESSAGE STARTS HERE
		$response = "<strong>Hello " . $name . ",</strong>";
		$response .= "Thanks for reach out to us."; 
		$response .= "We have received your mail and"; 
		$response .= "we will get in touch with you soon.";
		
		
		include("contact-message-response.php");
		exit;
		// SHOWING RESPONSE MESSAGE ENDS HERE
		
	}
	
}

?>
