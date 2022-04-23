<?php include config.php?>

<!DOCTYPE html>
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
								<a href="index.html">   MI CASA REAL ESTATE</a>	
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
													<li><a href="Admin.php">Add Account</a></li>
													<li><a href="home1.php">Home</a></li>
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
			background-image : url('images/index_hero.jpg');
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
		<body>
//<?php
   include_once 'includes/config.php';
	$fetchQuery = mysqli_query($conn,"Select * from admin") or die(" could not connect to Database".mysqli_error($UserID));
//?>
		<div id='container'>
		<?php
		if(isset($_POST['submitDeleteBtn'])){
			$key = $_POST['KeytoDelete'];
			
			$check = mysqli_query("Select * from admin Where UserID ='$UserID'") or die ("Record not found".mysqli_error());
			if(mysql_num_rows($check)>0){
				
				$queryDelete = mysql_query("DELETE from admin where UserID ='$key'") or die("Not delete".mysqli_error());?>
				
				<div class ="alert alert-sucess">
				<p>Record Delete</p>
				</div>
			<?php 
			Header('Location:AdminDelete.php');
			}
			else {    
			?>
				<div class ="alert alert-warning">
				<p>Record  Not Delete</p>
				</div>
			<?php }
		}
		
		?>
				<table >
					<tr>
						<td><h1 style = 'color: black;'>Delete</td>
					</tr>
			     <tr>
				 <th>Users ID</th>
				<th>Username</th>
				<th>Name</th>
               	<th>Email</th>
               <th>Password</th>
			   <th>Select</th>
			   <th>Delete</th>
                </tr>
				<?php
				$id = 1;
					while($row = mysqli_fetch_array($fetchQuery)) {?>
                      <tr>
							<form action ="" method = 'post' role="form">
            				<td><?php echo $id;?></td>
							<td><?php echo $row['Username'];?></td>
							<td><?php echo $row['Name'];?></td>
							<td><?php echo $row['Email'];?></td>
							<td><?php echo $row['Password'];?></td>
				
						    <td>
					<input type ="checkbox" name="keytoDelete" value=<?php echo $row['UserID'];?> required>
					</td>
					<td>
					<input type ="submit" name="btnSubmit" class ="btn btn-info">
					</td>
						<td>
								<input type = 'submit' value =  'Log Out' name = 'cancel'>
								</td>
							</form>
					</tr>
					<?php $id++;}
					?>

				</table>
		</div>		
	</body>
</html>