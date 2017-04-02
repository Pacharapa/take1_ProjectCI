<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="../modify" method="post">

		<input hidden="hidden" name="id" value="<?=$items[0]['user_id']?>"> <!-- ซ่อน -->

		<strong><?=$items[0]['user']?></strong>
		<br>
		<strong>ชื่อ-นามสกุล </strong><input type="text" name="name" value="<?=$items[0]['name_surname']?>">
		<br>
		<strong>Password </strong><input type="text" name="password" value="<?=$items[0]['password']?>">
		<br>
		<strong>Email </strong><input type="text" name="email" value="<?=$items[0]['Email']?>">
		<br>
		<strong>Phone </strong><input type="text" name="phone" value="<?=$items[0]['phone']?>">
		<br>

		<button type="sunmit">ยืนยัน</button>

	</form>
</body>
</html>