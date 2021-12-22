<!DOCTYPE html>
<html>
<head>
<title>Edit details</title>
<style>
body {
  background-image: url('9.jpg');
  background-size: cover;
  background-repeat:no-repeat;
  font-family: 'Varela Round', sans-serif;
}
</style>
</head>
<body>
<center><h1 style="color:yellow;font-size:60px">PRAESENTIA</h1></center>
<center><h2 style="color:blue;font-size:30px">EDIT DETAILS</h2></center><br><br><br><br>
<?php
$id=$_POST["id"];
$conn = mysqli_connect("localhost","root","","praesentia");
$r= mysqli_query($conn,"SELECT Employee_Id FROM employee_details WHERE Employee_Id='" . $_POST["id"] . "'");
$count  = mysqli_num_rows($r);
if($count==0) {
	$message = "Invalid Office Id.\\Try again";
          echo "<script type='text/javascript'>if(alert('$message'));
          document.location='view.php'</script>";
	} 
else
{
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$sel_query="SELECT Employee_Id,Password,Photo,Employee_Name,Employee_Address,Phone,Employee_email_Address from employee_details WHERE Employee_Id='$id'";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)){ ?>
<center><form action="edit.php" method="POST">
   <label for="fname" style="font-size:25px"><b>Office ID:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
   <input type="text" id="id" name="id" value="<?php echo $row['Employee_Id'] ?>" readonly><br><br>
   <label for="fname" style="font-size:25px"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
   <input type="text" id="name" name="name" value="<?php echo $row['Employee_Name'] ?>" required><br><br>
 <label for="fname" style="font-size:25px"><b>Password:&nbsp;&nbsp</b></label>
   <input type="password" id="password" name="password" value="<?php echo $row['Password'] ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
<label for="fname" style="font-size:25px"><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</b></label>
  <input type="email" id="email" name="email" value="<?php echo $row['Employee_email_Address'] ?>" required><br><br>
<label for="fname" style="font-size:25px"><b>Phone No:&nbsp;&nbsp;</b></label>
   <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Must require 10 numbers" value="<?php echo $row['Phone'] ?>" required><br><br>
  <center><label for="fname" style="font-size:25px"><b>Address:&nbsp;&nbsp;&nbsp;</b></label>
   <textarea name="address" required><?php echo $row['Employee_Address']?></textarea><br><br>
 <label for="fname" style="font-size:25px"><b>Employee Photo:</b></label>
<label for="myfile">Select file:</label>
  <input type="file" name="myfile" required><br><br>
 <input type="submit" value="Submit" style="font-size:18px">
<?php }} ?>
</form></center>
</body>
</html>
