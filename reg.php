<?php
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,'mission_eminent');
	if($connect)
	{
		//echo "Connected";
		$name=$_POST["v_fname"];
		$vlname=$_POST["v_lname"];
		$vemail=$_POST["v_email"];
		$vno=$_POST["v_no"];
		$addr=$_POST["v_add"];
		$qua=$_POST["v_qua"];
		$dom=$_POST["v_dom"];
		$area=$_POST["v_area"];
		$ins="INSERT INTO volunteer (Name, Surname, Email,Contact_Number, Address, Qualification, Work_Domain, Area) VALUES ('$name','$vlname','$vemail','$vno','$addr','$qua','$dom','$area')";
		$ins1=mysqli_query($connect, $ins);
		if($ins1)
			echo "Registration done successfully";
	}
?>