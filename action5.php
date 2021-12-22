<?php
session_start();
$id=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","praesentia");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
date_default_timezone_set('Asia/Kolkata');
$result=mysqli_query($conn,"SELECT const FROM employee_attendance where Employee_Id='$id'");
$row = mysqli_fetch_assoc($result);
$const=$row['const'];
if(date("h:i:sa")>"07:30:00pm")
{
if($const==0)
{
$date=date("d/m/Y,h:i:sa");
$dina=date("d/m/Y");
$result=mysqli_query($conn,"UPDATE time SET leaving='$date' WHERE Employee_Id='$id' and date='$dina'");
$over=(int)date("h")-3;
$result=mysqli_query($conn,"UPDATE employee_attendance SET Over_Time=Over_Time+'$over',const=1 WHERE Employee_Id='$id'");
$message = "Thank you!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
{
$message = "You already left!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
}
else
{
$message = "Wait until 9pm!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
?>