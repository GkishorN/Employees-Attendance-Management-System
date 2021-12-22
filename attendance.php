<?php
 $conn = new mysqli("localhost", "root","", "praesentia");
if(time()>strtotime('9 am')||time()<strtotime('10 am')||time()>strtotime('1 pm')||time()<strtotime('2 pm'))
{
 $result = mysqli_query($conn,"UPDATE employee_attendance SET Attendance=Attendance+0.5 WHERE Employee_Id='" . $_POST["id"] ."'");
 $message = "Welcome!!!Attendance marked sucessfully";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
{
$message = "Sorry you are late";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
?>