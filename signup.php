<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<main>
<div class = "content2">
    <section>
    <h1>SignUp</h1>
    <form action = "includes/signup.inc.php" method = "post" class = "formnew">
    <input type = "text" name = "uid" placeholder = "Username">
    <input type = "text" name = "mail" placeholder = "E-mail">
    <input type = "password" name = "pwd" placeholder = "Password">
    <input type = "password" name = "pwd-repeat" placeholder = "Repeat Password"><br>
    <button type ="submit" name = "signup-submit">REGISTER<submit>
    
    </form>
    </section>
    <br>
    Go back to <a href = "header.php"> login page! </a>
</div>
</main>
</body>
