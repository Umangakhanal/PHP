<?php 
//connecting with database
 //Create Table query 
// try{
//     $conn=mysqli_connect("localhost","root","","Study");
//     // echo "Connected";
//     $sql="CREATE TABLE students(id int auto_increment PRIMARY KEY, name varchar(50), age int)";
//     mysqli_query($conn,$sql);
// }
// catch(mysqli_sql_exception){
//     echo "Couldn't found database";
// }

?>

<?php 
$conn=mysqli_connect("localhost","root","","Study");
// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $age=$_POST['age'];

    // mysqli_query($conn,"INSERT INTO students VALUES(null,'$name','$age')");
   
    $read=(mysqli_query($conn,"SELECT * from students WHERE id=1"));
    while($row=mysqli_fetch_assoc($read)){
        echo $row['id']." ".$row['name']." ". $row['age']."<br>";
    }
    // echo "Data Inserted Successfully!";
// }

?>

<!-- <form method="POST">
    Name: <input type="text" name="name">
    Age: <input type="number" name="age">
    <input type="submit" value="submit" name="submit">

</form> -->