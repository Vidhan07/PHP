<!DOCTYPE html>
<html>
<head>
	<title>Registration | CVC</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	<script src="reg.js"> </script>
</head>
<body bgcolor="#056312">
	<form name="Prob" action="Prob.php" method="POST" onsubmit="return validate()">
	<div>
	<table>
	<tr>
	<td><label>Problem: </label></td>
	<td><textarea rows="10" cols="40"></textarea><br><br></td>
	</tr>
	<tr>
	<td><label>Status: </label></td>
	<td><select type="text" name="P_sta" id="f3" required>
		<option value=""></option>
		<option value="Solved">Solved</option>
		<option default value="Pending">Pending</option>
	</select><br><br></td>
	</tr>
	</table>
		<input type="submit" id="subbtn" name="Login" value="Submit"><br><br>
	</div>
	</form>
</body>
</html>