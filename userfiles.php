<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Files</title>
</head>
<body>
	<?php
	session_start();

	$username = $_SESSION['username'];


	if(isset($_GET['username'])){
		printf("<p><strong>%s</strong></p>\n",
		htmlentities($_GET['username']));
	}

	$dir = sprintf("/srv/uploads/%s", $username);
	$_SESSION['dir'] = $dir;
	$files = scandir($dir);

	echo "<h1>Welcome ".$username."!</h1>";
	echo "<h2>Below is a list of all your files, click the link to download then view:</h2>";

	for ($i=2; $i < count($files); $i++) {
		$link = sprintf("/srv/uploads/%s/%s", $username, $files[$i]);
		echo "<a href=./image.php?file=$files[$i]>$files[$i]</a>";
		echo '<br/>';
	}

	?>
	<br/>

	<form enctype="multipart/form-data" action="uploader.php" method="POST">
		<p>
			<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
			<label for="uploadfile_input">Choose a file to upload:</label>
			<input name="uploadedfile" type="file" id="uploadfile_input" />
		</p>
		<p>
			<input type="submit" value="Upload File" />
		</p>
	</form>

	<br/>
	<br/>
	<br/>

	<form method="GET" action="delete.php">
		<label for="filename">File to delete?:</label>
		<input type="text" name="filename" id="filename" />
		<input type="submit" value="delete" />
	</form>

	<br/>
	<br/>
	<br/>

	<form method="POST" action="send.php">
		<label for="filesend">Filename:</label>
		<input type="text" name="filesend" id="filesend" />
		<label for="recepient">Send to?:</label>
		<input type="text" name="recepient" id="recepient" />
		<input type="submit" value="send" />
	</form>

	<br/>
	<br/>
	<br/>

	<form method="GET" action="logout.php">
		<input type="submit" value="logout" />
	</form>

</body>
</html>
