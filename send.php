<?php
session_start();


// Get the filename and make sure it is valid

$curUser = $_SESSION['username'];

$sendFile = basename($_POST['filesend']);
$userName = basename($_POST['recepient']);


if( !preg_match('/^[\w_\.\-]+$/', $sendFile) ){
	header("Location: sendError.php");
	exit;
}


// Get the username and make sure it is valid
if( !preg_match('/^[\w_\-]+$/', $userName) ){
	header("Location: sendError.php");
	exit;
}

$file_path = sprintf("/srv/uploads/%s/%s", $curUser, $sendFile);
$full_path = sprintf("/srv/uploads/%s/%s", $userName, $sendFile);

if( copy ($file_path, $full_path) ){
	header("Location: sendSuccess.php");
	exit;
}
else{
	header("Location: sendError.php");
	exit;
}


?>
