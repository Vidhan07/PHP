<!DOCTYPE html>
<html>
<head>
   <title></title>
   <style>
     #frm{
      margin-top: 100px;
     }
     #btn{
  color: #fff;
  background: #337ab7;
  padding: 5px;
  margin-left: 50%;
}
.myOtherTable { width:50%;background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }
.myOtherTable th { background-color:#BDB76B;color:white;width:50%;font-variant:small-caps; }
.myOtherTable td, .myOtherTable th { padding:5px;border:0; }
.myOtherTable td { font-family:Georgia, Garamond, serif; border-bottom:1px solid #BDB76B;height:50px; }
</style>
<body>
<div id=frm>
<table class="myOtherTable" align="center">
      <tr><th>Volunteer_id</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Email</th>
      <th>Contact_Number</th>
      <th>Address</th>
      <th>Qualification</th>
      <th>Work_Domain</th>
      <th>Area</th>
      </tr>
<?php 
session_start();
$connection=new mysqli("localhost","root","","mission_eminent");
$username=$_SESSION["username"];
$data=$connection->query("SELECT * FROM volunteer");
 //$row=mysqli_fetch_assoc($data);
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
         </tr>";     
   }
?>
</table>
</div>
</body>
</html>