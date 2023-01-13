<?php



		//connect with database
			$conn = new mysqli("localhost","root","","eexamination");
			if($conn -> connect_error){
				echo "Error connecting .Please try again".$conn -> connect_error;
			}
			else{
							$username=$_POST["username"];
							$password=$_POST["password"];
							$sql="select * from admin where ausername='$username' and apassword='$password' ";

							$result=$conn->query($sql);

							
								if($result-> num_rows >0){

										//if there are any results it means there is a user with that admin and password
										//so it is a valid entry so i will take him to home page
									header("Location:adminrights.php");
								}
								else{
											//if there are no entries matching that username and password 
										//it means he/she is a fake user 
									//I will take him to signup page again
									header("Location:adminlogin.php");
								}
							
				}





?>


