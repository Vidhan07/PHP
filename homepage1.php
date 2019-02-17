<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script src="reg.js"></script>
	<script src="log.js"></script>
</head>
<body class="wrap">
<div class="header">
<a href="homepage1.php"><img src="finallogo.png"></a>
</div>
<div class="pic">
	<marquee scrollamount="10" direction="left" behaviour="alternate">
	<img src="1.jpg" height="300">
	<img src="2.jpg" height="300">
	<img src="3.jpg" height="300">
	<img src="4.jpg" height="300">
	<img src="5.jpg" height="300">	
	</marquee>
</div>

<div class="tab">
  <button class="tablinks" id="defaultOpen" onclick="openTab(event, 'Home')">Home</button>
  <button class="tablinks" onclick="openTab(event, 'About Us')">About Us</button>
  <button class="tablinks" onclick="openTab(event, 'Contact Us')">Contact Us</button>
  <button class="tablinks" onclick="openTab(event, 'Gallery')">Gallery</button>
  <button class="tablinks" onclick="openTab(event, 'OnlineD')">Online Donation</button>
  <button class="tablinks" onclick="openTab(event, 'Signup')">Register as volunteer</button>
  <button class="tablinks" onclick="openTab(event, 'Login')">Login</button>
</div>

<div id="Home" class="tabcontent">
  <h3>This is Home!!!!!!!!</h3>
  <p>we have established several schools in the previous year that aims at educating students with good

quality education

we have been able to facilitate 78 dropouts to join education back and indulge into education and

vocational working

we have enabled a program to promote children to take up suitable professions to kickback poverty and

set a example in the society
Gift A Smile

Gift A Smile is a program that helps you be a part of the initiative to reach out to underprivileged

children and provide them with quality education

The schools offer State Syllabus (accredited by the State Govt.) thus allowing children to mainstream

into the current educational context

Most children are first generation learners, paving the way for a generation of educated families

Sports and extra-curricular activities offered in the schools promote the all round well being of the child

Yoga, Pranayama and Breathing technique form a part of their daily routine
</p>
</div>

<div id="About Us" class="tabcontent">
  <h3>About US</h3>
  <p>Mission Eminent is a registered non government organization, striving ceaselessly in the field of

education and motivating dropouts to get back to education thus aiming to empower persons with

economic crisis to become active contributors to society. At any time through its wide ranging

programs, the ngo touches lives of thousands of persons with economic crunches. From humble

beginnings it has grown as a model rehabilitation centre covering a broad spectrum of services providing

education for differently poverty stricken children, vocational rehabilitation training and employment

services for person with both from rural and urban areas belonging to poor socio-economic

background as priority.

Its mission has been “to meet the individual needs of people , create awareness, promote acceptance

and inclusion of such individuals into the society. It aims at making every individual feel worthy of life

that they are leading and helps them in becoming contributing members of society in their own way”.

We considers education a crucial input towards development and inclusion of children from poor

households into mainstream human activities who would otherwise be trapped in the vicious cycle of

poverty . Inclusion for them are at three levels - Physical, Social Educational.</p> 
</div>

<div id="Contact Us" class="tabcontent">
  <h3>Contact Us</h3>
  <p>For Donation related queries, please write to:

donation@missionemminentindia.org

To Support Us/Establish Partnership, please write to:

Corporate Partnership:

cp@missione.org

Individuals

donation@missionemminentindia.org

For Events Brand Association, please write to:

All India

events@missionemminentindia.org

For Media related queries, please write to:

North East India

media@missionemminentindia.org

South India

media@missionemminentindia.org

West India

media@missionemminentindia.org

For Communication related queries, please write to:

Creative Support Writer | Photographer | Designer

comm@missionemminent a.org</p>
</div>

<div id="Gallery" class="tabcontent">
  <h3>Gallery</h3>
  <p>picssssssss</p>
</div>

<div id="OnlineD" class="tabcontent">
  <h3>Online Donation!!!</h3>
  <p>Please donate....</p>
</div>

<div id="Signup" class="tabcontent">
  <form name="reg" action="reg.php" method="POST" onsubmit="return validate1()">
	<div>
	<table>
	<tr>
		<label1>* fields are required</label1>
	</tr>
	<tr>
	<td><label>Name: </label></td>
	<td><input type="text" name="v_fname" id="f11" placeholder="First Name" onclick="es1()" required><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Surname: </label></td>
	<td><input type="text" name="v_lname" id="f22" placeholder="Last Name" required><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>E-mail: </label></td>
	<td><input type="text" name="v_email" id="f33" placeholder="E-mail that you frequently use" required><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Contact No.: </label></td>
	<td><input type="text" name="v_no" id="f44" placeholder="Mobile-No." required><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Address: </label></td>
	<td><textarea rows="5" cols="40" name="v_add" id="f55" placeholder="Current Address" required></textarea><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Qualification: </label></td>
	<td><select type="text" name="v_qua" id="f66" required>
		<option value=""></option>
		<option value="Graduate">Graduate</option>
		<option value="H.S.C">H.S.C</option>
		<option value="S.S.C">S.S.C</option>
	</select><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Domain: </label></td>
	<td><select type="text" name="v_dom" id="f77" required>
		<option value=""></option>
		<option value="Communication">Communication</option>
		<option value="Teaching">Teaching</option>
		<option value="Management">Management</option>
	</select><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Area: </label></td>
	<td><select type="text" name="v_area" id="f88" required>
		<option value=""></option>
		<option value="Makarpura">Makarpura</option>
		<option value="Shubhanpura">Shubhanpura</option>
		<option value="Akota">Akota</option>
		<option value="Manjalpur">Manjalpur</option>
	</select><label1>*</label1><br><br></td>
	</tr>
	</table>
		<input type="checkbox" name="tick" onclick="diss1()">I agree to all <a href="tac.php" style="color: blue"> Terms and Conditions</a> of CVC<br><br>
		<input type="submit" id="subbtn" name="Register" value="Submit"><br><br>
	</div>
	</form>
</div>

<div id="Login" class="tabcontent">
  <form action="log.php" method="POST" id="log" onsubmit="return validate()">
	<div>
	<table>
	<tr>
		<label1>* fields are required</label1>
	</tr>
	<tr>
	<td><label>Username: </label></td>
	<td><input type="text" name="u_name" id="f1" oninput="es()" required><label1>*</label1><br><br></td>
	</tr>
	<tr>
	<td><label>Password: </label></td>
	<td><input type="Password" name="pwd" id="f2" oninput="diss()" required><label1>*</label1><br><br></td>
	</tr>
	</table>
		<input type="submit" id="btn" name="Login" value="Login"><br><br>
		<a href="Forgotpass.php" style="color: blue"> Forgot  Password? </a>
	</div>
	</form>
</div>
</body>
<script type="text/javascript">
document.getElementById("defaultOpen").click();
	function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</html>