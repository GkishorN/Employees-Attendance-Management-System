<!DOCTYPE html>
<html>
<head>
<title>admin registration</title>
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
<center><h2 style="color:blue;font-size:30px">ADMIN REGISTRATION</h2></center><br><br><br><br><br><br>
<form action="action_page.html" method="POST">
  <center><label for="fname" style="font-size:25px"><b>Admin ID:&nbsp;&nbsp;&nbsp;</b></label>
   <input type="text" id="id" name="id"><br><br>
 <label for="fname" style="font-size:25px"><b>Password:&nbsp;&nbsp</b></label>
  <input type="password" id="password" name="password"><br><br>
 <label for="fname" style="font-size:25px"><b>Admin Photo:</b></label>
<label for="myfile">Select file:</label>
  <input type="file" id="myfile" name="myfile" multiple><br><br> 
 <input type="submit" value="Submit" style="font-size:18px">
</form>
</body>
</html>
