<?php 
if(!isset($_SESSION)){
    session_start();
}
include "database.php";
if(isset($_POST['logout'])){
    session_destroy();
    $_SESSION = array();
}
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql1 = "SELECT id FROM login WHERE username='$username' AND password='$password'";
        $res1= mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($res1);
        if ($row1){
            $student_id = $row1['id'];
            $sql2 = "SELECT name FROM students WHERE id='$student_id'";
            $res2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($res2);
            $_SESSION['name'] = $row2['name'];
        }
        else{
            echo "Invalid Username or password";
        }
    }

?>

<h2> LogIn </h2>
<?php
if (isset($_SESSION['name'])){
    echo "<h1>WELCOME " .$_SESSION['name']. " You are logged in</h1>";

    ?>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
    <?php
}else{
    if(isset($error)) echo $error;
    ?>
<form action='<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>' method="post">
    <label >Username:</label>
    <input type="text" name="username"  required><br><br>
    <label >Password:</label>
    <input type="password" name="password"  required><br><br>
    <input type="submit" name="login" value="Login">
</form>
<?php
}
?>
