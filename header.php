<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Document</title>
</head>
<body>
    
<header>
    <nav>
        <ul>
        <li><a href = "index.php">Home</a></li>
        <li><a href = "#">Portfolio</a></li>
        <li><a href = "#">About</a></li>
        <li><a href = "#">Contact</a></li>
        </ul>
    </nav>


    <div>
        <form action = "includes/login.inc.php" method =  "post">
            <input type = "text" name = "mailuid" placeholder = "Username/Email">
            <input type = "password" name = "pwd" placeholder = "Password">
            <button type = "submit"  name = "login-submit">Login</button>
        </form>

        <a href = "signup.php">Sign Out </a>
        <form action = "includes/logout.inc.php" method =  "post">
            <button type = "submit"  name = "logout-submit">Logout</button>
        </form>

    </div>
</header>