<?php


$conn = new mysqli("localhost","root","","eexamination");
            if($conn -> connect_error){
                echo "Error connecting .Please try again".$conn -> connect_error;
            }
            else{
                        

                        $username=$_POST["username"];
                        $password=$_POST["password"];
                                $salt=substr($username, 0,2);
                                $newcryptedpassword=crypt($password,$salt);
                             //   echo "My custom encyrpter passworrd ".$newcryptedpassword."<br>";


                        $sql="SELECT * FROM student WHERE username='$username'";


                        $result=$conn->query($sql);

                        if($result-> num_rows >0){

                            $row=$result->fetch_assoc();

                            if($row["password"]===$newcryptedpassword){
                                header("Location: givetest.php");
								echo "Authenticated";
                            }
                            else{
								header("Location: studentlogin.php");
                                        echo "Fake";
                            }
                        }
                        else{
							header("Location: studentlogin.php");
                                echo "No Such Username";
                        }
            }

?>
