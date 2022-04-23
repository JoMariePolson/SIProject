<?php
	session_start();	//starts a new session or continues one that already exists
    if(isset($_POST['add'])){

                foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }

                 $conn = mysqli_connect('localhost','root','','realestate') or die("<h1>Could not connect to database.</h1>");
                    if($conn)
                    {
                   

                        $sql= "INSERT INTO admin(UserID, Username, Name, Email, Password) VALUES ('$UserID','$Username', '$Name', '$Email', '$Password');";
                        
						echo $sql;
						
                        //run the query
                        $runqry = mysqli_query($conn, $sql) or die("</br></br>Could not insert data.");

                        //close the connection
                        mysqli_close($conn);
                        
                        
    
                    }
                    header('Location: Admin.php');
                
                }
	
	if(isset($_GET['Username']))
	{
		foreach($_POST as $key => $value) //assigning values from form to local variables
		{
			$$key = $value;
		}


             //connect to database
        $conn = mysqli_connect('localhost','root','','realestate') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM realestate WHERE `admin` = '".$_GET['Username']."'"; //check if the entered email and password matches any row stored in the database
        
        //echo $query;
        
        $result = mysqli_query($conn, $query);   //run query
        
        $numrows = mysqli_num_rows($result);    //checks number of rows returned (int)
        
     
        
        if($numrows == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Password'] = $row['Password'];
                 $_SESSION['Name'] = $row['Name'];
                $_SESSION['Email']= $row['Email'];
                              header("Location:Admin.php");

            }
        }
       
             
       
                }

                
		
	
?>