<?php
session_start();


// Get the filename and make sure it is valid
$filename = basename($_FILES['uploadedfile']['name']);
$filename = str_replace(" ", "_", $filename); //https://stackoverflow.com/questions/27564501/php-upload-spaces-in-file-name
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	header("Location: nameError.php");
	exit;
}

// Get the username and make sure it is valid
$username = $_SESSION['username'];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	header("Location: nameError.php");
	exit;
}

$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
	header("Location: userfiles.php");
	exit;
}
else{
	header("Location: nameError.php");
	exit;
}
?>
