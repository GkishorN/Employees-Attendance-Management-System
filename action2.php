<?php
$username = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender=$_POST['gender'];
$phone = $_POST['phone'];
$photo = $_POST['myfile'];
$address=$_POST['address'];
if (!empty($username) || !empty($password) || !empty($id) || !empty($email) ||!empty($gender)|| !empty($phone) || !empty($photo)||!empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "praesentia";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT Employee_Id From employee_details Where Employee_Id = ? Limit 1";
     $INSERT = "INSERT Into employee_details (Employee_Id,Password,Photo,Employee_Name,Gender,Employee_Address,Phone,Employee_email_Address) values(?,?,'$photo', ?,?,?,?,?)";
     $ADD="INSERT Into employee_attendance (Employee_Id) values(?)";
    // Prepare statement
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
      $stmt->bind_param("sssssis",$id,$password,$username,$gender,$address,$phone,$email);
      $stmt->execute();
      $stmt->close();
      $st=$conn->prepare($ADD);
      $st->bind_param("s",$id);
      $st->execute();
      $st->close();
      $message = "New record inserted successfully";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='admin portal 2.html'</script>";
     } else {
      $message = "Someone already registered using this id. \\nTry again.";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='admin portal 2.html'</script>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>