<?php
$username = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$photo = $_POST['myfile'];
if (!empty($username) || !empty($password) || !empty($id) || !empty($email) ||!empty($gender)|| !empty($phone) || !empty($photo)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "praesentia";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Admin_Id From admin Where Admin_Id = ? Limit 1";
     $INSERT = "INSERT Into admin (Name, Admin_Id,Password, Email,Gender, Phone, Admin_Photo) values(?, ?, ?, ?,?, '$phone', '$photo')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $id);
     $stmt->execute();
     $stmt->bind_result($id);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $username, $id, $password, $email,$gender);
      $stmt->execute();
       $message = "New record inserted successfully";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='admin portal.html'</script>";
     } else {
      $message = "Someone already registered using this id. \\nTry again.";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Adminregistration.html'</script>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>