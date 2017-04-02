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
		 <div class="col-md-4"></div>
		 <div class="col-md-4">
  			<div class="panel panel-danger">
		 		<div class="panel-heading"><h3><center>เพิ่มข้อมูลของคุณ</center></h3></div>
		  		<div class="panel-body">
		    	<form class="form-horizontal" action="insertcontroller/getdb" method="post">
				  <div class="form-group">
				    <label for="name surname" class="col-sm-4 control-label">name surname</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="name" placeholder="name surname">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="User name" class="col-sm-4 control-label">User name</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="user" placeholder="User name">
				    </div>
					</div>
					<div class="form-group">
				    <label for="password" class="col-sm-4 control-label">Password</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="password" placeholder="password">
				    </div>
					</div>
					<div class="form-group">
				    <label for="Email" class="col-sm-4 control-label">Email</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="email" placeholder="Email">
				    </div>
					</div><div class="form-group">
				    <label for="Phone" class="col-sm-4 control-label">Phone</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="phone" placeholder="Phone"> 
				    </div>
					</div>
					<center><button type="sunmit" class="btn btn-warning">ยืนยัน</button></center>
	  			</div>
			</div>
		</div>
	  	<div class="col-md-4"></div>
	</div>

	</form>
</body>
</html>