<?php
session_start();
$id=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","praesentia");
date_default_timezone_set('Asia/Kolkata');
$date=date("d/m/Y,h:i:sa");
$dine=date("d/m/Y");
$result=mysqli_query($conn,"SELECT temp FROM time where Employee_Id='$id' and date='$dine'");
$row = mysqli_fetch_assoc($result);
$const=$row['temp'];
if(date("h:i:sa")>"05:35:00pm")
{
if($const==1)
{
$message = "You are Late please come on time and half attendance has been deducted!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
$result=mysqli_query($conn,"UPDATE time SET Coming='$date' WHERE Employee_Id='$id' and date='$dine'");
$result = mysqli_query($conn,"UPDATE employee_attendance SET Attendance=Attendance-0.5 WHERE Employee_Id='$id'");
}
else
{
$message = "You are pressing wrong button!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
}
else
{
if($const==1)
{
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result=mysqli_query($conn,"UPDATE time SET Coming='$date' WHERE Employee_Id='$id' and date='$dine'");
$message = "Welcome back!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
{
$message = "You are pressing wrong button!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
}
?>