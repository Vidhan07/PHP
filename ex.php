<!DOCTYPE html>
<html>
<head>
   <title>Events Record | DiveIn</title>
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
      <tr><th>Eventname</th>
      <th>Event Day</th>
      <th>Time of Event</th>
      <th>Description</th>
      <th>Repeat</th>
      </tr>
<?php 
session_start();
$connection=new mysqli("localhost","root","","divein");
$username=$_SESSION["username"];
$data=$connection->query("SELECT * FROM events WHERE username='$username'");
 //$row=mysqli_fetch_assoc($data);
 while($row = mysqli_fetch_assoc($data)) {
      echo
      "<tr> 
       <td>{$row['ename']}</td>
       <td>{$row['eventday']}</td>
       <td>{$row['timeofevent']}{$row['TYPE']}</td>
        <td>{$row['description']}</td>
         <td>{$row['repeats']}</td>
         </tr>";
         
   }
?>
</table>
<p>
      <a href="diary1.php" id="btn">BACK</a>
      </p>
</div>
</body>
</html>
