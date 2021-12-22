<?php
$conn = mysqli_connect("localhost","root","","praesentia");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn,"UPDATE employee_attendance SET flag=0");
$display="System has been reset";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='Admin portal 2.html'</script>";
$result=mysqli_query($conn,"UPDATE Employee_attendance SET Full_Attendance=Full_Attendance+1");
$result=mysqli_query($conn,"UPDATE time SET const=0");
$result=mysqli_query($conn,"UPDATE employee_attendance SET const=0");
$result=mysqli_query($conn,"UPDATE time SET temp=0");
?>