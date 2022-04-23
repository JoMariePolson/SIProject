<!DOCTYPE  html>
<html lang="en">
<head>
<title>Real Estate</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">

</head>
<?php
if(isset($_POST['update']))
{
   
   $conn = mysqli_connect('localhost','root','','realestate') or die("<h1>Could not connect to database.</h1>");
   
   mysqli_select_db($conn,'realestate');
   
   $sql = "SELECT * from admin";
   $records = mysqli_query($conn,$sql);
   
  ?>
<body>

<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(image1.jpg)"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
						<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo">
								<a href="index.html">   MI CASA REAL ESTATE <span>+</span></a>	
							</div>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>

				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li class="active"><a href="AdminEdit.php">Edit Account</a></li>
													<li><a href="AdminDelete.php">Delete Account</a></li>
													<li><a href="index.php">Home</a></li>
													<li><a href="upload.php">Upload Gallery</a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div id='container'>
				<table>
					<tr>
						<td><h1 style = 'color: black;'>Edit User</td>
					</tr>
							 	   <tr>
				<td><label>Username</label></td>
				    <td><label>Name</label></td>
               	<td><label>Email</label></td>
               <td><label>Password</label></td>
               

            </tr>
            		<tr>  
		</table>
	   </div>
</body>	   
</html>
       <?php 
	     /* while($row = mysqli_fetch_array($records))
		  {
			 echo"<tr><form action = Updatevalidate.php method = 'POST'>";
               echo "<td><input type = 'text' name = 'Name' value = '".$row['Name']."'></td>";
			   echo "<td><input type = 'text' name = 'Email' value = '".$row['Email']."'></td>";
			   echo "<td><input type = 'text' name = 'Password' value = '".$row['Password']."'></td>";
			   echo "<td><input type =hidden name = 'Username' value = '".$row['Username']."'></td>";
			   echo "<td><input type =Submit>";
			   echo "</form><tr>";
		  }*/
          
      ?>
 	