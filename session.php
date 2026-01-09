<?php
session_start();
if(isset($username)){
    
}
$username=$_POST['username'];
$_SESSION['username']=$username;
var_dump($_SESSION);
?>
<html>
    <body>
        <form style="border: 1px solid black; width:fit-content;height:auto;padding:20px" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="post">
            <h1 style="display: flex; justify-content:center;">Log In</h1>
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" value=''><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit">
        </form>
    </body>
</html>