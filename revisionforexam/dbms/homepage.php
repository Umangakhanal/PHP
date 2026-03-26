<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");
    exit();
    }
    echo "Hello,".$_SESSION['name'];
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<form method="post">
    <input type="submit" value="logout" name="logout">

</form>