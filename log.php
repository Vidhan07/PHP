<?php
	session_start();
	$_SESSION['message'] = "";
	// Get values pass from form in login.php file
	$usname=$_POST['u_name'];
	$passw=$_POST['pwd'];

	// connect to the server and select database
	$connect = mysqli_connect("localhost", "root", "");
	mysqli_select_db($connect, "mission_eminent");

	// to prevent mysql injection
	$usname = stripcslashes($usname);
	$passw = stripcslashes($passw);
	$usname = mysqli_real_escape_string($connect, $usname);
	$passw = mysqli_real_escape_string($connect, $passw);

	//Query the database for user
	$result = mysqli_query($connect ,"select * from login where Username = '$usname' and Password = '$passw'") or die("Failed to query database".mysql_error());
	$row = mysqli_fetch_array( $result);
	if(is_array($row)) {
		$_SESSION["username"] = $row['Username'];
	}
	if ($row['Username'] == $usname && $row['Password'] == $passw && $row['Admin'] == 1)
	{
		 header("Location:asmhp.php");
	} 
	else if($row['Username'] == $usname && $row['Password'] == $passw && $row['Admin'] != 1)
	{
		header("Location:volhp.php");
	}
	else 
	{
		$_SESSION['message']="Invalid Username or Password!";
	}
?>
