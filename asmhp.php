<!DOCTYPE html>
<html>
<head>
	<title>Admin Home | CVC</title>
	<link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="table.css">
  <script type="text/javascript">
    function es()
  {
    document.getElementById("subbtn").disabled=true;  
  }
  function diss()
  {
    document.getElementById("subbtn").disabled=false; 
  }
  function validate()
  {
    name=document.Event.e_name.value;
    des=document.Event.e_desc.value;
    if(!textAlphanumeric(name, "* For eventname please use alphabets and numbers only *",'f1'))
    {
      return false;
    }
    if(!textAlphanumeric(des, "* For event description please use alphabets and numbers only *",'f2')) 
    {
      return false;
    }
    if(!lengthDefine(name,50,f1,"*Event name is too long*"))
    {
      return false;
    }
    if(!lengthDefine(des,200,f2,"*Event description is too long"))
    {
      return false;
    }

  }
  function textAlphanumeric(inputtext, alertMsg,id)
  {
    var alphaExp = /^[0-9a-zA-Z][0-9a-zA-Z ]+$/; 
    if (inputtext.match(alphaExp))
    {
      return true;
    } 
    else
    {
      document.getElementById(id).innerHTML = alertMsg; // This segment displays the validation rule for address.
      //inputtext.focus();
      alert(alertMsg);
      return false;
    }
  }
  function lengthDefine(inputtext, max,id,alertMsg)
{
  var uInput = inputtext;
  if (!(uInput.length < max))
  {
    return true;
  } 
  else
  {
    document.getElementById(id).innerHTML =alertMsg; // This segment displays the validation rule for username
    //inputtext.focus();
    alert(alertMsg);
    return false;
  }
}
  </script>
</head>
<body class="wrap">
<div class="header">
<a href="homepage1.php"><img src="finallogo.png"></a>
</div>
<div class="tab">
	<button class="tablinks" id="defaultOpen" onclick="openTab(event, 'Home')">Home</button>
  <button class="tablinks" onclick="openTab(event, 'Event')">Add new events</button>
  <button class="tablinks" onclick="openTab(event, 'VolDetails')">Volunteer Details</button>
  <button class="tablinks" onclick="openTab(event, 'StudentDetails')">Student Details</button>
  <button class="tablinks" onclick="openTab(event, 'PostProblem')">Posted Problem</button>
  <button class="tablinks" onclick="openTab(event, 'Donations')">Donations List</button>
  <button class="tablinks"><a href="homepage1.php" style="color: #00FFFF">Logout</button></a>
</div>

<div id="Home" class="tabcontent">
  <h3>Welcome....</h3>
</div>

<div id="Event" class="tabcontent">
  <h3>Add events...</h3>
  <form action="event1.php" method="POST" id="event">
  <table>
  <tr>
    <label1>* fields are required</label1>
  </tr>
  <tr>
  <td><label>Name: </label></td>
  <td><input type="text" name="e_name" id="f1" placeholder="Event Name" onclick="es()" required><label1>*</label1><br><br></td>
  </tr>
  <tr>
  <td><label>Description: </label></td>
  <td><textarea rows="10" cols="50" id="f2" name="e_desc" required></textarea><label1>*</label1><br><br></td>
  </tr>
  <tr>
  <td><label>Date: </label></td>
  <td><select type="text" name="e_day" id="f3" required>
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
  </select>
  <select type="text" name="e_mon" id="f4" required>
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
    </select>
  <select type="text" name="e_year" id="f5" 
 onclick="diss()" required>
    <option value=""></option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
  </select><label1>*</label1><br><br></td>
  </tr>
  </table>
   <input type="submit" id="subbtn" name="Login" value="Submit"><br><br>
   </form>
</div>
<div id="VolDetails" class="tabcontent">
  <h3>Volunteer Details</h3>
  <div id="frm">

<?php 
//session_start();
$connection=new mysqli("localhost","root","","mission_eminent");
//$username=$_SESSION["username"];
$data=$connection->query("SELECT * FROM volunteer");
 //$row=mysqli_fetch_assoc($data);
if(mysqli_num_rows($data)>0){
  echo "  <table class='myOtherTable' align='center'>
      <tr><th>Volunteer_id</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Email</th>
      <th>Contact_Number</th>
      <th>Address</th>
      <th>Qualification</th>
      <th>Work_Domain</th>
      <th>Area</th>
      </tr>";
      while($row = mysqli_fetch_assoc($data)) {
      echo
      "<tr> 
       <td>{$row['Vol_id']}</td>
       <td>{$row['Name']}</td>
       <td>{$row['Surname']}</td>
        <td>{$row['Email']}</td>
         <td>{$row['Contact_Number']}</td>
         <td>{$row['Address']}</td>
         <td>{$row['Qualification']}</td>
         <td>{$row['Work_Domain']}</td>
         <td>{$row['Area']}</td>
         </tr>";  }   
   }
   else
    echo "Nooooo";
?>
</table>
</div>
</div>
<div id="StudentDetails" class="tabcontent">
  <h3>Student Details</h3>
  <div id="frm">
  <table class="myOtherTable" align="center">
      <tr><th>student_id</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Volunteer_id</th>
      <th>Performance</th>
      </tr>
<?php 
//session_start();
$connection=new mysqli("localhost","root","","mission_eminent");
//$username=$_SESSION["username"];
$data=$connection->query("SELECT * FROM student");
 //$row=mysqli_fetch_assoc($data);
 while($row = mysqli_fetch_assoc($data)) {
      echo
      "<tr> 
       <td>{$row['St_id']}</td>
       <td>{$row['Name']}</td>
       <td>{$row['Surname']}</td>
        <td>{$row['email']}</td>
         <td>{$row['Vol_id']}</td>
         <td>{$row['Performance']}</td>
         </tr>";     
   }
?>
</table>
</div>
</div>
<div id="PostProblem" class="tabcontent">
  <h3>Problems will be viewed here...</h3>
</div>

<div id="Donations" class="tabcontent">
  <h3>Donations will be viewed here...</h3>
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