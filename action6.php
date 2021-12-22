<?php
session_start();
$id=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","praesentia");
$result = mysqli_query($conn,"SELECT Attendance FROM employee_attendance WHERE Employee_Id='$id'");
$row = mysqli_fetch_assoc($result);
$display="Your attendance is ".$row['Attendance']."(Please note 0.5 stands for half day)";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='Employee portal.html'</script>";
?>

