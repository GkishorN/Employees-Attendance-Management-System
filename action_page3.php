<?php
$message="";
session_start();
$_SESSION['id']=$_POST["id"];
$id=$_POST["id"];
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","praesentia");
	$result = mysqli_query($conn,"SELECT Employee_Id,Password FROM employee_details WHERE Employee_Id='" . $_POST["id"] . "' and Password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
 
	if($count==0) {
		$message = "Invalid Office_Id or Password.\\nTry again";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee Login.html'</script>";
	} else {
                date_default_timezone_set('Asia/Kolkata');
                if(date("h:i:sa")>"13:00:000pm"&&date("h:i:sa")<"16:30:00pm")
        {
            $date=date("d-m-Y,h:i:sa");
            $dina=date("d-m-Y");
            $result = mysqli_query($conn,"UPDATE employee_attendance SET Attendance=Attendance+0.5 WHERE Employee_Id='" . $_POST["id"] ."' and flag=0");
            $result = mysqli_query($conn,"UPDATE employee_attendance SET flag=1 WHERE Employee_Id='" . $_POST["id"] ."'");
            $result=mysqli_query($conn,"INSERT Into date_and_time (Employee_Id,Time,Date) values('$id','$date','$dina')");
            $message = "Welcome!!!Attendance will be automatically noted once you login!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
}
else
if(date("h:i:sa")>"12:30:00pm"&&date("h:i:sa")<"12:45:00pm")
{
$date=date("d-m-Y,h:i:sa");
$dina=date("d-m-Y");
$result = mysqli_query($conn,"UPDATE employee_attendance SET Attendance=Attendance+0.5 WHERE Employee_Id='" . $_POST["id"] ."' and flag=1 or flag=0");
            $result = mysqli_query($conn,"UPDATE employee_attendance SET flag=2 WHERE Employee_Id='" . $_POST["id"] ."'");
$result=mysqli_query($conn,"INSERT Into date_and_time (Employee_Id,Time,Date) values('$id','$date','$dina')");
            $message = "Welcome!!!Attendance will be automatically noted once you login!!!";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
	}
else
{
$message = "Attendance is closed you can continue with login";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='Employee portal.html'</script>";
		
}
}
$dina=date("d/m/Y");
$result = mysqli_query($conn,"SELECT Employee_Id,date FROM time WHERE Employee_Id='" . $_POST["id"] . "' and date = '$dina'");
	$count  = mysqli_num_rows($result);
if($count==0)
{
$result = mysqli_query($conn,"INSERT INTO time (Employee_Id,date) values('$id','$dina')");
}
}
?>