<?php
include "database.php";
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students(name, roll, course) VALUES('$name','$roll','$course')";
    if (mysqli_query($conn,$sql)){
        echo "Student Details saved successfully.";
    } else {
        echo "Error:". mysqli_error($conn);
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
    <input type="submit" name="save" value="Save Student">
</form>