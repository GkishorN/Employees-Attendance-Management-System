<?php
session_start();
$id=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","praesentia");
$result = mysqli_query($conn,"SELECT Full_Attendance,Attendance FROM employee_attendance WHERE Employee_Id='$id'");
$row = mysqli_fetch_assoc($result);
$absent=$row['Full_Attendance']-$row['Attendance'];
$result = mysqli_query($conn,"UPDATE employee_attendance SET Absence='$absent' WHERE Employee_Id='$id'");
$display="You were absent for ".$absent."(Please note 0.5 stands for half day)days!!!";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='Employee portal.html'</script>";
?>
