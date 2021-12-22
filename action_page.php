<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","praesentia");
	$result = mysqli_query($conn,"SELECT Admin_Id,Password FROM admin WHERE Admin_Id='" . $_POST["id"] . "' and Password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Admin_Id or Password.\\nTry again";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Admin Login.html'</script>";
	} else {
		header('Location: Admin portal 2.html');
                exit;
	}
}
?>