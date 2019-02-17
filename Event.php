<!DOCTYPE html>
<html>
<head>
	<title>Registration | CVC</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	<script src="reg.js"> </script>
</head>
<body bgcolor="#056312">
	<form name="reg" action="reg.php" method="POST" onsubmit="return validate()">
	<div>
	<table>
	<tr>
	<td><label>Name: </label></td>
	<td><input type="text" name="E_fname" id="1" placeholder="Event Name" onclick="es()" required><br><br></td>
	</tr>
	<tr>
	<td><label>Description: </label></td>
	<td><textarea rows="10" cols="50"></textarea></td>
	</tr>
	<tr>
	<td><label>Day: </label></td>
	<td><select type="text" name="E_day" id="f3" required>
		<option value=""></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select><br><br></td>
	</tr>
	<tr>
	<td><label>Month: </label></td>
	<td><select type="text" name="E_mon" id="f4" required>
		<option value=""></option>
		<option value="January">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
	    <option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
		</select><br><br></td>
	</tr>
	<tr>
	<td><label>Year: </label></td>
	<td><select type="text" name="E_year" id="f5" required>
		<option value=""></option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
	</select><br><br></td>
	</tr>
	<tr>
		<td><label>Venue: </label></td>
		<td><input type="text" name="e_venue" id="f6" required></td>
	</tr>
	<tr>
		<td><label>Photo: </label></td>
		<td><input type="" name="e_pic"></td>
	</tr>
	</table>
		<input type="checkbox" name="tick" onclick="diss()">I agree to all <a href="tac.php" style="color: blue"> Terms and Conditions</a> of CVC<br><br>
		<input type="submit" id="subbtn" name="Login" value="Submit"><br><br>
	</div>
	</form>
</body>
</html>