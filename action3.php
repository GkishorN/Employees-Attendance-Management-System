<?php 
$id=$_POST["id"];
$date=$_POST["date"];
$conn = mysqli_connect("localhost","root","","praesentia");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn,"SELECT Employee_ID,Time FROM date_and_time WHERE Employee_Id='$id' and Date='$date'");
$count  = mysqli_num_rows($result);
if($count==0) {
	$message = "Employee with this Office ID was not present on that day";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Check presence.html'</script>";
	} else {
     $display="Employee with this Office ID was present on that day";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='Check presence.html'</script>";
      	}