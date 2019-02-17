<!DOCTYPE html>
<html>
<title>Home | CVC</title>
<link rel="stylesheet" href="home.css">
<body bgcolor="#064510">

<div class="bar black">
  <button class="tablinks" onclick="openTab('Home')">Home</button>
  <button class="tablinks" onclick="openTab('About Us')">About Us</button>
  <button class="tablinks" onclick="openTab('Contact Us')">Contact Us</button>
  <button class="tablinks" onclick="openTab('Gallery')">Gallery</button>
  <button class="tablinks" onclick="openTab('Volunteer Registration')">Volunteer Registration</button>
  <button class="tablinks" onclick="openTab('Login')">Login</button>
  <button class="tablinks" onclick="openTab('Online Donation')">Online Donation</button>
</div>
<br><br>
<div>
<img src="logo2.jpg">
</div>
<div id="Home" class="container tab">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
</div>

<div id="About Us" class="container tab" style="display:none">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Contact Us" class="container tab" style="display:none">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Gallery" class="container tab" style="display:none">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="Volunteer Registration" class="container tab" style="display:none">
<script src="reg.js"></script>
  <form name="reg" action="reg.php" method="POST" onsubmit="return validate()">
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
</div>
<div id="Login" class="container tab" style="display:none">
  <script src="log.js"></script>
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
  </form>
</div>
<div id="Online Donation" class="container tab" style="display:none">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
</div>
<script>
function openTab(evt, cityName) {
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
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
