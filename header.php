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
    
<header>
   <body>
    <div class = "content">
       <h2>COVID-19 PATIENT PRELIMINARY TESTING PORTAL</h2>
        <form action = "includes/login.inc.php" method =  "post">
            <input type = "text" name = "mailuid" placeholder = "Username/Email"><br>
            <input type = "password" name = "pwd" placeholder = "Password"><br>
            <button type = "submit"  name = "login-submit">LOGIN</button>
        </form>
        <br>
        Not a member yet? <a href = "signup.php"> Sign Up! </a>
        
    </div>
    </body>
</header>