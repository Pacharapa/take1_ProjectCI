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
			  <div class="panel panel-warning">
			  <div class="panel-heading"><h4>แก้ไขข้อมูลของคุณที่นี่</h4></div>
			  <div class="panel-body">
			  <form class="form-horizontal" action="../modify" method="post">
			  	<input hidden="hidden" name="id" value="<?=$items[0]['user_id']?>"> <!-- ซ่อน -->
			  	<strong>User :: <?=$items[0]['user']?></strong><br><br>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-4 control-label">ชื่อ นามสกุล</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" value="<?=$items[0]['name_surname']?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="password" placeholder="Password" value="<?=$items[0]['password']?>" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-4 control-label">Email</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="email" placeholder="Password" value="<?=$items[0]['Email']?>" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-4 control-label">Phone</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="phone" placeholder="Password" value="<?=$items[0]['phone']?>" >
				    </div>
				  </div>
				  <center><button type="sunmit" class="btn btn-warning">ยืนยัน</button></center>
				</form>
			  </div>
			</div>
		</div>
	 	<div class="col-md-4"></div>
	</div>
	

	
	</form>
</body>
</html>