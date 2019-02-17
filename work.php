<!DOCTYPE html>
<html>
<head>
	<title>Volunteer home | CVC </title>
</head>
<body>
<form method="POST" action="volw.php">
<div>
	<table>
	<tr>
	<td><label>Name: </label></td>
	<td><input type="text" name="v_fname" id="f1" placeholder="First Name" onclick="es()" required><br><br></td>
	</tr>
	<tr>
	<td><label>Surname: </label></td>
	<td><input type="text" name="v_lname" id="f2" placeholder="Last Name" required><br><br></td>
	</tr>
	<tr>
	<td><label>E-mail: </label></td>
	<td><input type="text" name="v_email" id="f3" placeholder="E-mail that you frequently use" required><br><br></td>
	</tr>
	<tr>
	<td><label>Contact No.: </label></td>
	<td><input type="text" name="v_no" id="f4" placeholder="Mobile-No." required><br><br></td>
	</tr>
	<tr>
	<td><label>Address: </label></td>
	<td><input type="text" name="v_add" id="f5" placeholder="Current Address" required><br><br></td>
	</tr>
	<tr>
	<td><label>Qualification: </label></td>
	<td><select type="text" name="v_qua" id="f6" required>
		<option value=""></option>
		<option value="Graduate">Graduate</option>
		<option value="H.S.C">H.S.C</option>
		<option value="S.S.C">S.S.C</option>
	</select><br><br></td>
	</tr>
	<tr>
	<td><label>Domain: </label></td>
	<td><select type="text" name="v_dom" id="f7" required>
		<option value=""></option>
		<option value="Communication">Communication</option>
		<option value="Teaching">Teaching</option>
		<option value="Management">Management</option>
	</select><br><br></td>
	</tr>
	<tr>
	<td><label>Area: </label></td>
	<td><select type="text" name="v_area" id="f8" required>
		<option value=""></option>
		<option value="Makarpura">Makarpura</option>
		<option value="Shubhanpura">Shubhanpura</option>
		<option value="Akota">Akota</option>
		<option value="Manjalpur">Manjalpur</option>
	</select><br><br></td>
	</tr>
	</table>
		<input type="checkbox" name="tick" onclick="diss()">I agree to all <a href="tac.php" style="color: blue"> Terms and Conditions</a> of CVC<br><br>
		<input type="submit" id="subbtn" name="Login" value="Submit"><br><br>
	</div>
	</form>
</body>
</html>