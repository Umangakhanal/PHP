<?php 
    session_start();
    $conn=mysqli_connect("localhost","root","","Study");
    //For REGISTER 
    if(isset($_POST['rsubmit'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        mysqli_query($conn,"INSERT INTO login_details(name,password) VALUES('$name','$password')");
        echo "User Registered Successfully!";
    }
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $login= mysqli_query($conn,"SELECT * FROM login_details WHERE name='$name' AND password='$password'");
         
        if(mysqli_num_rows($login)>0){
            $_SESSION['name']=$name;
            header("Location: homepage.php");
        }
        else{
            echo "LOGIN failed!";
        }
    }
?>
<form method="post">
    <h1>Register Form</h1>
    Username: <input type="text" name="name" >
    Password: <input type="password" name="password">
    <input type="submit" value="submit" name="rsubmit">
</form>
<form method="post">
    <h1>LOGIN Form</h1>
    Username: <input type="text" name="name" >
    Password: <input type="password" name="password">
    <input type="submit" value="submit" name="submit">
</form>
