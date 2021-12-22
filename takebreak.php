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
if(date("h:i:sa")<"07:00:00pm")
{
$message = "wait until break time!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
{
if($const==0)
{
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result=mysqli_query($conn,"UPDATE time SET Going='$date',temp=1 WHERE Employee_Id='$id' and date='$dine'");
$message = "Get back soon!!!";
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