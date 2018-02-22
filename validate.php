<?php
session_start();
$username = (string) $_GET['username'];
$_SESSION['username'] = $username;

$h = fopen("/srv/users/users.txt", "r");

while( !feof($h) ){
	$temp = (string)fgets($h);
	if(strcmp($username, $temp) == -1) {
		header("Location: userfiles.php");
		exit;
	} 
}

header("Location: loginfailure.php");
exit;
fclose($h);
?>
