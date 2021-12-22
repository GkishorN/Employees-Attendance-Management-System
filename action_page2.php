<?php
$id = $_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$p=$_POST['op'];
$pp=$_POST['cp'];
$conn = mysqli_connect("localhost","root","","praesentia");
$result = mysqli_query($conn,"SELECT Employee_Id,Phone,Employee_email_Address FROM employee_details WHERE Employee_Id='" . $_POST["id"] . "' and Phone='". $_POST["phone"]."' and Employee_email_Address='". $_POST["email"]."'");
	$count  = mysqli_num_rows($result);
if($count==0) {
	$message = "Invalid details.\\Try again";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee Login.html'</script>";
	} else {
     if($pp==$p)
{
$res = mysqli_query($conn,"UPDATE employee_details SET Password='$p' WHERE Employee_Id='" . $_POST['id'] . "'");
$mes = "Password changed sucessfully.";
          echo "<script type='text/javascript'>if(alert('$mes'));
          document.location='Employee Login.html'</script>";
}
else
{
$mes = "New password and confirm password must be same!!!.\\nTry again";
          echo "<script type='text/javascript'>if(alert('$mes'));
          document.location='Employee Login.html'</script>";
}
      	}
?>