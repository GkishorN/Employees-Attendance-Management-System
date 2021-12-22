<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Manage employees</title>
<link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="2.css">
<link rel="stylesheet" href="3.css">
<link rel="stylesheet" href="4.css">
<script src="5.js"></script>
<script src="6.js"></script>
<script src="7.js"></script>
</head>
<style>
body {
  background-image: url('th.jpg');
  background-size: cover;
  background-repeat:no-repeat;
  font-family: 'Varela Round', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<body>
<center><h1 style="color:red;font-size:60px">PRAESENTIA</h1></center>
<center><h2 style="font-size:40px">VIEW DETAILS</h2></center><br><br>
<div class="form">
<center><table width="90%" border="5" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong><center>Office Id</center></strong></th>
<th><strong><center>Password</center></strong></th>
<th><strong><center>Photo</center></strong></th>
<th><strong><center>Name</center></strong></th>
<th><strong><center>Gender</center></strong></th>
<th><strong><center>Address</center></strong></th>
<th><strong><center>Phone</center></strong></th>
<th><strong><center>Email</center></strong></th>
</tr>
</thead>
<tbody>
<?php
$con = mysqli_connect("localhost","root","","praesentia");
$count=1;
$sel_query="Select * from employee_details ORDER BY Employee_Id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["Employee_Id"]; ?></td>
<td align="center"><?php echo $row["Password"]; ?></td>
<td align="center"><img src="<?php echo $row["Photo"];?>" height="80" width="80"></td>
<td align="center"><?php echo $row["Employee_Name"]; ?></td>
<td align="center"><?php echo $row["Gender"]; ?></td>
<td align="center"><?php echo $row["Employee_Address"]; ?></td>
<td align="center"><?php echo $row["Phone"]; ?></td>
<td align="center"><?php echo $row["Employee_email_Address"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table></center><br><br>
<center><table>
<tr>
<td><a href="#editEmployeeModal" class="btn btn-success" data-toggle="modal"><span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</span></a></td>
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="edit details.php" method="POST">
					<div class="modal-header">						
					<h4 class="modal-title">Edit Detials</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                                        <div class="form-group">
						<center><label>Office Id:</label></center>
						<input type="text" class="form-control" id="id" name="id" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Edit">
				</div>
			</form>
</div>
</div>
</div>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><span>Delete</span></a></td>
<td>
&nbsp;&nbsp;&nbsp;<a href="Admin portal 2.html" class="btn btn-success" ><span>Go Home</span></a>
</td>
</tr>
</table></center>
</div>
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="delete.php" method="POST">
					<div class="modal-header">						
					<h4 class="modal-title">Delete Detials</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                                        <div class="form-group">
						<center><label>Office Id:</label></center>
						<input type="text" class="form-control" id="id" name="id" required>
                                           <div class="form-group">
						<center><label>Email ID:</lable></center>
                                            <input type="text" class="form-control" id="email" name="email" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Remove">
				</div>
			</form>
</div>
</div>
</div>
</body>
</html>