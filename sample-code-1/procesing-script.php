<?php

$name = "";
$email = "";
$age = "";
$gender = "";


if ( isset( $_POST["name"] )  &&  !empty( $_POST["name"] ) ) {
	$name = $_POST["name"];
	
	if ( !preg_match( "/^[a-zA-Z ]*$/", $name ) ) {
		echo "Name: Only letters and whitespace allowed";
	}else{
		echo "Name: " . $name . "<br>";
	}	
}else{
	echo "Enter Full Name. <br>";
}

if ( isset( $_POST["email"] ) && !empty( $_POST["email"] ) ) {
	$email = $_POST["email"];
	
	if ( !preg_match( "/@/", $email ) ) {
		echo "Email: Only email and whitespace allowed";
	}else{
		echo "Email: " . $email . "<br>";
	}	
}else{
	echo "Enter Email. <br>";
}

if ( isset( $_POST["age"] ) &&!empty ($_POST["age"] ) ) {
	$age = $_POST["age"];
	
	if ( !is_numeric( $age ) ) {
		echo "Age: Only numbers and whitespace allowed";
	}else{
		echo "Age: " . $age . " years old.<br>";
	}	

}else{
	echo "Enter Age. <br>";
}

if (isset($_POST["gender"]) && !empty($_POST["gender"])) {	
	$gender = $_POST["gender"];
	
	if ( !is_numeric( $gender ) ) {
		echo "Gender: Only numbers and whitespace allowed";
	}else{
		echo "Gender: " . $gender . "<br>";
	}	
}else{
	echo "Select Gender. <br>";
}

?>
