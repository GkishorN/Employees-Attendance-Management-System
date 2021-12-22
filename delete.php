<?php
$id = $_POST['id'];
$email=$_POST['email'];
$conn = mysqli_connect("localhost","root","","praesentia");
$result = mysqli_query($conn,"SELECT Employee_Id FROM employee_details WHERE Employee_Id='" . $_POST["id"] . "' and Employee_email_Address= '". $_POST["email"]."'");
	$count  = mysqli_num_rows($result);
if($count==0) {
	$message = "Invalid details.\\Try again";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='view.php'</script>";
	} else {
     $retval = mysqli_query($conn,"DELETE FROM employee_details WHERE Employee_Id='$id'");
     $ret = mysqli_query($conn,"DELETE FROM employee_attendance WHERE Employee_Id='$id'");
     $display="Details deleted succesfully";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='view.php'</script>";
      	}
?>