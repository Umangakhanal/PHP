<?php
    session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

    if ($password == $password) {
        $_SESSION['username'] = $username;
        echo "Login successful";
    } else {
        $error = "Wrong Password";
    }
}
if (isset($_POST['logout'])) {
    session_destroy();
    // header("/umanga/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Login</title>
</head>
<body>
<?php
if (isset($_SESSION['username'])) {
    echo "<h2> You have successfully logged in," . $_SESSION['username'] . "</h2>";
    ?>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
    <?php
} else {
    ?>
    <h2>Login Form</h2>
    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    <form action="" method="post">
        Username:
        <input type="text" name="username" required>
        <br><br>
        Password:
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php
}
?>
</body>
</html>