<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Failure</title>
    <link rel="stylesheet" href="/home/alexcort/public_html/loginfailure.css">
</head>
<body>
    <div class="errormsg">
        <h1>You Entered an Invalid Username</h1>
        <h1 id="redirect">...Redirecting...</h1>
    </div>
    <?php
    header("refresh:1; url=login.html");
    ?>
</body>
</html>
