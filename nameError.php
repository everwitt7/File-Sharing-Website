<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Incorrect Filename</title>
    <link rel="stylesheet" href="/home/alexcort/public_html/loginfailure.css">
</head>
<body>
    <div class="errormsg">
        <h1>You Entered Invalid Characters In Your Filename</h1>
        <h1 id="redirect">...Redirecting...</h1>
    </div>
    <?php
    header("refresh:3; url=userfiles.php");
    ?>
</body>
</html>
