<?php
session_start();

// Get the filename and make sure it is valid
$filename = basename($_GET['filename']);
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	header("Location: deleteError.php");
	exit;
}

// Get the username and make sure it is valid
$username = $_SESSION['username'];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	header("Location: nameError.php");
	exit;
}

$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

if(unlink($full_path)){
	header("Location: userfiles.php");
	exit;
}else{
	header("Location: deleteError.php");
	exit;
}
?>
