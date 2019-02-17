<!DOCTYPE html>
<html>
<head>
	<title>Log In | CVC</title>
	<style type="text/css">
		div{
				margin-left: 500px;
				margin-top: 150px;
		}
	</style>
	<script src="log.js"> </script>
</head>
<body bgcolor="#cc0021">
	<form action="log.php" method="POST" id="log" onsubmit="return validate()">
	<div>
	<table>
	<tr>
	<td><label>Username: </label></td>
	<td><input type="text" name="u_name" id="f1" oninput="es()" required><br><br></td>
	</tr>
	<tr>
	<td><label>Password: </label></td>
	<td><input type="Password" name="pwd" id="f2" oninput="diss()" required><br><br></td>
	</tr>
	</table>
		<input type="submit" id="btn" name="Login" value="Login"><br><br>
		<a href="forgotpass.php" style="color: white"> Forgot  Password? </a>
	</div>
	<div class="msg"><?php if(isset($_SESSION['message'])) { echo $_SESSION['message']; } ?></div>
	</form>
</body>
</html>