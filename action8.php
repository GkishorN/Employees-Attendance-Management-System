<?php
session_start();
$id=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","praesentia");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
date_default_timezone_set('Asia/Kolkata');
$date=date("d/m/Y,h:i:sa");
$time=date("h:i:sa");
$result=mysqli_query($conn,"SELECT const FROM time where Employee_Id='$id'");
$row = mysqli_fetch_assoc($result);
$const=$row['const'];
if($time<"07:00:00pm")
{
$message = "Please wait until 12:30pm!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
{
if($const==0)
{
$result = mysqli_query($conn,"UPDATE time SET lunch='$date' WHERE Employee_Id='$id'");
$result = mysqli_query($conn,"UPDATE time SET const=1 WHERE Employee_Id='$id'");
$message = "Get back soon!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
{
$message = "You already had lunch!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
}
?>