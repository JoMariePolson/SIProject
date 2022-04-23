<?php

	session_start();

	      $UserID="";
          $Phone= "";
			$email= "";
			$Password= "";
			 $Username ="";
			 $Name= "";
     
	if(isset($_SESSION['new1']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['new1']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}

		if(isset($_SESSION['add']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['add']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Real Estate</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">

</head>
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
													<li><a href="index.php">Home</a></li>
													<li><a href="upload.php">Upload Gallery</a></li>
													<li><a href="UserAddProperty.php">Add Property</a></li>
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
		<style>
	
	table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

input[type=submit] {
    background-color: #32c69a;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;


}
	body{
			background-image : url('image1.jpg');
			background-size: 110%;
		}

table {
  border-collapse: collapse;
    border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
width: 900px;
height: 450px;
}

th, td {
  padding: 15px;
}
		  input[type=reset], button, input[type=button]
		 {
			 
			 border: none;
			 padding: 7px;
			 color: white;
			 font-weight: bolder;
		 }

		.container {
  border-radius: 5px;

  padding: 20px;
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
width: 500px;
height: 450px;
}
.f{
    background-color: #32c69a;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;

}
	</style>
		<div id='container'>
				<table >
					<tr>
						<td><h1 style = 'color: black;'>Add User</td>
					</tr>
							 	   <tr>
				<td><label>UserID</label></td>
				<td><label>Username</label></td>
				    <td><label>Name</label></td>
               	<td><label>Email</label></td>
               <td><label>Password</label></td>
           

            </tr>
            		<tr>
                  		<form action = 'adminvalidate.php' method = 'POST'>
       <?php echo"
	         <td><input type = 'text' name = 'UserID' placeholder ='UserID'  value = '$UserID' /></td>
              <td><input type = 'text' name = 'Username' placeholder ='Username'  value = '$Username' /></td>
               <td><input type = 'text' name = 'Name' placeholder ='Name'  value = '$Name' /></td>
                 <td><input type = 'text' name = 'Email' placeholder ='Email'  value = '$email' /></td>
                   <td><input type = 'text' name = 'Password' placeholder ='Password'  value = '$Password' /></td>
                     

               
                     	";?>
						<td>	<input type = 'submit' value ='Add' name ='add'/> </td>

						</form>
						</tr>
            
            
            <?php
       				     $conn = mysqli_connect('localhost','root','','realestate') or die("<h1>Could not connect to database.</h1>");
						$sql = "SELECT * FROM admin";
						$result = mysqli_query($conn, $sql) or die ("<h2>Could not RETRIEVE data</h2>");
						
						?>
				 <?php while($row = mysqli_fetch_array($result)):;?>
                      <?php
					      echo "<td>". $row['UserID']."</td>";
							echo "<td>". $row['Username']."</td>";
							echo "<td>" . $row['Name']."</td>";
							echo "<td>" . $row['Email']."</td>";
							echo "<td>" . $row['Password']."</td>";
										
							?>
								 <?php	
									echo '<td><a class="f" href="Updatevalidate.php?UserID' . $row['UserID'] . '">Edit</a></td>';
									echo '<td><a class="f" href="AdminDelete.php?UserID' . $row['UserID'] . '"">Delete</a></td>';
							echo "</tr>";
							?>
               
						
							

            </tr>

						

				 	
							   <?php endwhile;
						mysqli_free_result($result);
						mysqli_close($conn);
						
				
						?>


							<form action = 'index.php' method = 'post'>
								<input type = 'submit' value =  'Log Out' name = 'cancel'/>
							</form>
						</td>
						
					</tr>

				</table>
		</div>

	
				
	</body>
</html>