<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body class="wrap">
<div class="header">
<a href="homepage1.php"><img src="finallogo.png"></a>
</div>
<div class="tab">
	<button class="tablinks" id="defaultOpen" onclick="openTab(event, 'Home')">Home</button>
  <button class="tablinks" onclick="openTab(event, 'WorkDetails')">Work Details Form</button>
  <button class="tablinks" onclick="openTab(event, 'StudentDetails')">Student Detail Form</button>
  <button class="tablinks" onclick="openTab(event, 'PostProblem')">Post Problem</button>
  <button class="tablinks"><a href="homepage1.php" style="color: #00FFFF">Logout</button></a>
</div>

<div id="Home" class="tabcontent">
  <h3>Welcome....</h3>
</div>

<div id="WorkDetails" class="tabcontent">
  <h3>Work Details Form</h3>
</div>

<div id="StudentDetails" class="tabcontent">
  <h3>Student Details Form</h3>
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
  </form>
  </table>
</div>

<div id="PostProblem" class="tabcontent">
  <h3>Post any problem here!!!!</h3>
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