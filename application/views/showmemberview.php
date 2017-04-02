<!DOCTYPE html>
<html>
<head>

		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<br>
	<br>
	
		<div class="row">
		  <div class="col-md-2"></div>
		  <div class="col-md-8">
		  <div class="panel panel-default">
  				<div class="panel-heading" ><h3>ข้อมูลสมาชิก</h3></div>
  					<div class="panel-body"> 
  						<h3>เพิ่มสมาชิกใหม่    <a href="insertcontroller"><button type="submit" class="btn btn-success">Add User</button></a> </h3>
   						<table class="table table-bordered">
				  		<tr>
							<th>
								<center>Name  Surname</center>
							</th>
							<th>
								<center>User</center>
							</th>
							<th>
								<center>Password</center>
							</th>
							<th>
								<center>Email</center>
							</th>
							<th>
								<center>Phone</center>
							</th>
							<th>
								<center>Edit</center>
							</th>
							<th>
								<center>Delete</center>
							</th>
						</tr> 
						<?php foreach ($items as $key => $value) { ?>
						<tr>
							<td>
								<?=$value['name_surname']?>
							</td>
							<td>
								<?=$value['user']?>
							</td>
							<td>
								<?=$value['password']?>
							</td>
							<td>
								<?=$value['Email']?>
							</td>
							<td>
								<?=$value['phone']?>
							</td>
							<td>
								<center>
								<a href="editcontroller/view/<?=$value['user_id']?>"><button type="submit" class="btn btn-warning">Edit</button></a>
								</center>
							</td>
							<td>
								<center>
								<a href="editcontroller/delete/<?=$value['user_id']?>" onclick="return confirm('Are you sure?')"><button type="submit" class="btn btn-danger">Delete</button></a>
								</center>
							</td>
						
						</tr>
					<?php } ?>

				</table>
				
			</table>
		</div>
		  <div class="col-md-2"></div>
		</div>


</body>
</html>