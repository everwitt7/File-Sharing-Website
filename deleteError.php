<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>File Does Not Exist</title>
    <link rel="stylesheet" href="/home/alexcort/public_html/loginfailure.css">
</head>
<body>
    <div class="errormsg">
        <h1>That File Does Not Exist</h1>
        <h1 id="redirect">...Redirecting...</h1>
    </div>
    <?php
    header("refresh:3; url=userfiles.php");
    ?>
</body>
</html>
