<?php
 require "header.php";
?>

<main>
<div>
    <section>
    <h1>SignUp</h1>
    <form action = "includes/signup.inc.php" method = "post">
    <input type = "text" name = "uid" placeholder = "Username">
    <input type = "text" name = "mail" placeholder = "E-mail">
    <input type = "password" name = "pwd" placeholder = "Password">
    <input type = "password" name = "pwd-repeat" placeholder = "Repeat Password">
    <button type ="submit" name = "signup-submit">Signup<submit>
    


    </form>
    </section>
</div>
</main>

<?php
 require "footer.php";
?>