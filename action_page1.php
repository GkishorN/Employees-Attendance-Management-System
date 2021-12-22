<?php
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost","root","","praesentia");
$result = mysqli_query($conn,"SELECT Admin_Id,Password,Email FROM admin WHERE Admin_Id='" . $_POST["id"] . "' and Password = '". $_POST["password"]."' and Email='". $_POST["email"]."'");
	$count  = mysqli_num_rows($result);
$sql = "DELETE FROM admin WHERE Admin_id ='$id' AND Email='$email' AND Password='$password'";
$retval = mysqli_query( $conn,$sql);
if($count==0) {
	$message = "Invalid details.\\Try again";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Remove details.html'</script>";
	} else {
     $display="Details deleted succesfully";
     echo "<script type='text/javascript'>if(alert('$display'));
     document.location='admin portal.html'</script>";
$sql=mysqli_query($conn,"DELETE FROM employee_attendance WHERE Employee_Id='$id'");

      	}
?>