<?php
    session_start();
    if(!isset(($_SESSION["user"]))){
        header("location:login.php");
    }
?>
<h1>Phai dang nhap moi vao duoc</h1>
<a href="loggout.php" title="Loggout">Loggout</a>