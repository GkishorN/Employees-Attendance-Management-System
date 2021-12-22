<!DOCTYPE html>
<html>
<head>
<title>View details</title>
<link rel="stylesheet" href="design.css">
<style>
body {
  background-image: url('th.jpg');
  background-size: cover;
  background-repeat:no-repeat;
  font-family: 'Varela Round', sans-serif;
  
}
@media print {
    #printbtn {
        display :  none;
    }
} 
.button { 
height: 35px; 
width: 75px;
font-size:25px; 
} 
.card {
  box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
  background-color:yellow;
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
</style>
</head>
<body>
<center><h1 style="color:red;font-size:60px">PRAESENTIA</h1></center>
<center><h2 style="color:blue;font-size:30px">MY PROFILE</h2></center>
<?php
session_start();
$id=$_SESSION['id'];
$con = mysqli_connect("localhost","root","","praesentia");
$count=1;
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$sel_query="SELECT * FROM employee_details WHERE Employee_Id='$id'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<div id="card" class="card">
  <br>
  <img src="<?php echo $row["Photo"];?>" width=170px height=170px>
  <h2><u>Name:</u></h2>
  <h3><i><?php echo $row["Employee_Name"]; ?></i></h3>
  <h2><u>Office Id:</u></h2>
  <h3><i><?php echo $row["Employee_Id"]; ?></i></h3>
  <h2><u>Email:</u></h2>
  <h3><i><?php echo $row["Employee_email_Address"]; ?></i></h3>
  <h2><u>Contact:</u></h2>
  <h3><i><?php echo $row["Phone"]; ?></i></h3>
  <h2><u>Address:</u></h2>
  <h3><i><?php echo $row["Employee_Address"]; ?></i></h3>
</div>
<center><input id ="printbtn" type="button" class="button" value="Print" onclick="window.print();" >&nbsp;&nbsp;<input id="printbtn" type="button" class="button" value="Home" onclick="window.location.href='Employee portal.html';"></center>
<?php }?>
</body>
</html>