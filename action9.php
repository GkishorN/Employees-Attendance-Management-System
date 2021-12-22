<?php
session_start();
$id=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","praesentia");
$result = mysqli_query($conn,"SELECT Attendance,Over_Time FROM employee_attendance WHERE Employee_Id='$id'");
$row = mysqli_fetch_assoc($result);
$present=$row['Attendance'];
$half=$present*10%10;
if($half!=0)
$halfday=4;
$const=$present*10;
$full=($const-$half)/10;
$work=11*$full;
$total=$halfday+$work+$row['Over_Time'];
$result = mysqli_query($conn,"UPDATE employee_attendance SET Worked_hours='$total' WHERE Employee_Id='$id'");
$display="You were worked for ".$total." hours!!!";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='Employee portal.html'</script>";
?>

