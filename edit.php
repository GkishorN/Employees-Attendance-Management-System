<?php
$username = $_POST['name'];
$password = $_POST['password'];
$id=$_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$photo = $_POST['myfile'];
$address=$_POST['address'];
if (!empty($username) || !empty($password) || !empty($id) || !empty($email) || !empty($phone) || !empty($photo)||!empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "praesentia";
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
      $result = mysqli_query($conn,"UPDATE employee_details SET Password='$password',Photo='$photo',Employee_Name='$username',Employee_Address='$address',Phone='$phone',Employee_email_Address='$email' WHERE Employee_Id='$id'");
      $res = mysqli_query($conn,$result);
      $message = "Record updated successfully";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='view.php'</script>";
     } 
     $stmt->close();
     $conn->close();
    }
?>