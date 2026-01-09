<?php
$conn = mysqli_connect("localhost", "root", "", "students");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $sql_students = "INSERT INTO `student_details` VALUES
// (1, 'Amit', 110, '2025', 'BCSIT')";

// if (mysqli_query($conn, $sql_students)) {
//     echo "success <br>";
// } else {
//     echo "Error inserting student records: " . mysqli_error($conn) . "<br>";
// }
// $password=md5('pass012');
// $sql_login = "INSERT INTO `login_details` VALUES 
// (1, 'amit@example.com', 'pass012')";
// if (mysqli_query($conn, $sql_login)) {
//     echo "success";
// } else {
//     echo "Error inserting login records: " . mysqli_error($conn);
// }
 $values= mysqli_query($conn, 'SELECT * FROM login_details');
 $a=mysqli_fetch_assoc($values);
 var_dump($a);

// $update= mysqli_query($conn, 'UPDATE login_details SET email="ojhabhaskar@gmail.com"WHERE id=1');
// echo $update;
mysqli_close($conn);


//assignment 
// make 2 forms : Login and student details  store details in database and login validate through database