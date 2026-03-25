<?php
$name="";
$gender="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
}
?>


<form  method="post">
    Full Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";} ?>>MALE
    <input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";} ?>>FEMALE
    <input type="submit" value="submit">
</form>
<?php 
    if($name!=""){
        echo "Hello $name";
    }
?>