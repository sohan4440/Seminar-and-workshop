
<!DOCTYPE html>
<html>
<head>
	<title>Show Seminar and workshop</title>
</head>
<body style="background:url(a.png);padding:30px" >
   <table align="center" width="100%" style=" border-radius: 20px 20px 20px 20px;  margin-bottom: 1px solid #fff;font-size: 30px; background:url(ra.jpg);">
   	<tr><th>Seminar and workshop</th></tr>
   </table>
   <table>
   	<br>
   <form action="Showresult.php" method="post">
   	<input type="text" placeholder="ID " name="id" required style="background-color: powderblue;color:black; width: 270px;font-size: 20px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<select name="Catagory---" style="background-color: powderblue;color:black;width: 270px;font-size: 20px; margin-bottom: 1px solid #fff;">
   		<option value="a">Select Catagory---</option>
   		<option value="Free">Free</option>
   		<option value="Payment">Payment</option>
   		

   	</select>
   </form>
</table>
<hr>
<h1>Student Info</h1>
   <hr>
<?php
include_once("config.php");
if(isset($_POST["showresult"]))
{
   $id=$_POST['studentid'];
   $re=mysqli_query($con,"SELECT * FROM postinfo WHERE ID='$id'");
while($res = mysqli_fetch_array($re))
               {
                  $all[] = $res;}
                  foreach ($all as $res ) {
                     ?> 
<table align="left" style="font-size: 28px;color: white;">
   <div style="float: left;">
<tr><td>ID: <?php echo $res['ID'];?> </td></tr><br>
<tr></tr>
<tr><td>Name of Student: <?php echo $res['Name']; ?></td></tr><br>
<tr></tr>
<tr><td>Student Id: <?php echo $res['SID']; ?></td></tr><br>
<tr></tr>
<tr><td>Enrollment: <?php echo $res['Enrollment']; ?></td></tr>
<tr></tr>
<tr><td>Batch: <?php echo $res['Batch']; ?></td></tr>
</div>
                   <?php
                  }
}
?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
</body>
</html>
<center>
<table border="1" width="80%" style="font-size: 24px;background-color: white;"> <tr style="background-color: red;"><th>ID</th><th>title</th><th>catagory</th><th>dadeline</th><th>Location</th>
<?php
include_once("config.php");
If(isset($_POST["showresult"]))
{
$id=$_POST['id'];
$catagory=$_POST['catagory'];
   $result=mysqli_query($con,"SELECT * FROM postinfo WHERE id='$id' and catagory='$catagory'");
   while($res = mysqli_fetch_array($result))
               {
      
     echo "<tr><td>".$res['id']."</td>";
     echo "<td>".$res['title']."</td>";
     echo "<td>".$res['catagory']."</td>";
     echo "<td>".$res['dadeline']."</td>";
     echo "<td>".$res['location']."</td></tr>";
   }
   
}

?>
</table>
</center>