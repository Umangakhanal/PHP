<?php
include "database.php";
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql1 = "INSERT INTO students(name, roll, course) VALUES('$name','$roll','$course')";
    if (mysqli_query($conn,$sql1)){
        $sql_id = "SELECT id FROM students WHERE roll='$roll'";
        $res_id = mysqli_query($conn, $sql_id);
        $row_id = mysqli_fetch_assoc($res_id);
        $student_id = $row_id['id'];

        $sql2 = "INSERT INTO login (id, username, password) VALUES('$student_id','$username','$password')";
        if (mysqli_query($conn,$sql2)){
            echo "Student Details saved successfully.";
        }
        else{
            echo "Error saving login details:". mysqli_error($conn); 
        }
    } else {
        echo "Error saving student info:". mysqli_error($conn);
    }
}
?>
<h2>Student Details</h2>
<form action='<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>' method="post">
    <label>Name: </label>
    <input type="text" name="name" placeholder="Name"><br><br>
    <label>Roll no: </label>
    <input type="number" name="roll" placeholder="Roll"><br><br>
    <label>Course: </label>
    <input type="text" name="course" placeholder="Course"><br><br>
    <label>Username: </label>
    <input type="text" name="username" placeholder="username"><br><br>
    <label>Password: </label>
    <input type="password" name="password" placeholder="****"><br><br>
    <input type="submit" name="save" value="Save Student">
</form>