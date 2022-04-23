<?php
require('Updatevalidate.php');
$Username ="";
$Username=$_REQUEST['Username'];
$query = "SELECT * from admin where Username='".$Username."'"; 
 $conn = mysqli_connect('localhost','root','','realestate') or die("<h1>Could not connect to database.</h1>");
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="Admin.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$Username=$_REQUEST['Username'];
$Name =$_REQUEST['Name'];
$Email =$_REQUEST['Email'];
$Password =$_REQUEST['Password'];
$submittedby = $_SESSION["Username"];
$update="update realestate set Name='".$Name."',
Email='".$Email."', Password='".$Password."',
submittedby='".$submittedby."' where Username='".$Username."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['Username'];?>" />
<p><input type="text" name="Name" placeholder="Enter Name" 
required value="<?php echo $row['Name'];?>" /></p>
<p><input type="text" name="Email" placeholder="Enter Email" 
required value="<?php echo $row['Email'];?>" /></p>
<p><input type="text" name="Password" placeholder="Enter Password" 
required value="<?php echo $row['Password'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>