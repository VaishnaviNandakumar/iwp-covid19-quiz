<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
  


    if($password !== $passwordRepeat){
        header("Location: ../signup.php?error=passwordCheck&mail=".$email);
        exit()
    }
    else{

        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_init($stmt, $sql)){
        header("Location: ../signup.php?error=sqlerror");
        exit()
        }
    else{

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0){
        header("Location: ../signup.php?error=usertaken");
        exit()
        }
    }

    }
}