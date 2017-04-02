<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
		<tr>
			<th>
				name  surname
			</th>
			<th>
				User
			</th>
			<th>
				Password
			</th>
			<th>
				Email
			</th>
			<th>
				Phone
			</th>
			<th>
				edit
			</th>
			<th>
				delte
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
					<a href="editcontroller/view/<?=$value['user_id']?>"><button type="submit"> Edit </button></a>
				</td>
				<td>
					<a href="editcontroller/delete/<?=$value['user_id']?>" onclick="return confirm('Are you sure?')"><button type="submit"> Delete </button></a>
				</td>
			
			</tr>
		<?php } ?>

	</table>
</body>
</html>