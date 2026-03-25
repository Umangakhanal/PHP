<?php 
$conn = mysqli_connect("localhost","root","","Study");
if(isset($_POST['update'])){
    // $name=$_POST['name'];
    $id=$_POST['id'];

    //Update 
    // $update=mysqli_query($conn,"UPDATE students set name='$name' WHERE id=$id");
    // echo "Updated!";
    
    //Delete
    $delete=mysqli_query($conn,"DELETE FROM students where id=$id  ");
}
?>
<form  method="post">
    Enter ID: <input type="number" name="id">
    <!-- Enter Name: <input type="text" name="name" > -->
    <input type="submit" value="update" name="update">

</form>