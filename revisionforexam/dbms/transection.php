<?php 
$conn=mysqli_connect("localhost","root","","Study");
mysqli_begin_transaction($conn);
mysqli_query($conn,"INSERT INTO login_details VALUES('Pushpa', 'pushpa123')");
mysqli_query($conn,"INSERT INTO login_details VALUES('Umanga', 'umanga@123')");
mysqli_rollback($conn);
echo "Check yourself😒😒";
?> 