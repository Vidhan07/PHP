<!DOCTYPE html>
<html>
<head>
	<title>Volunteer home | CVC </title>
</head>
<body>
<form method="POST" action="stu_s.php" id="stu">
<div>
	<table>
	<tr>
	<td><label>Name: </label></td>
	<td><input type="text" name="s_fname" id="f1" placeholder="First Name" onclick="es()" required><br><br></td>
	</tr>
	<tr>
	<td><label>Surname: </label></td>
	<td><input type="text" name="s_lname" id="f2" placeholder="Last Name" required><br><br></td>
	</tr>
	<tr>
	<td><label>Performance: </label></td>
	<td><select type="text" name id="f3" required>
		<option value=""></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>

	</select><br><br></td>
	</tr>
	<tr>
		<td><input type="submit" id="subbtn" name="Login" value="Submit"><br><br></td>
		</tr>
	</div>
	</form>
	</table>
</body>
</html>