<?php

echo "results page";


$conn = new mysqli("localhost","root","","eexamination");
            if($conn -> connect_error){
                echo "Error connecting .Please try again".$conn -> connect_error;
            }
            else{
            	$marks=0;

					$getorderquery="SELECT min(qid) AS minId
					FROM  quesandans";

					$result=$conn->query($getorderquery);

					$row=$result->fetch_assoc();

					echo "Minmum id is ".$row["minId"]."<br>";
						echo"<br>";
					$minid=$row["minId"];
					$getorderquery="SELECT COUNT(qid) AS maxId
					FROM  quesandans";

					$result=$conn->query($getorderquery);

					$row=$result->fetch_assoc();
		echo("<br>");
					echo "Maximum id is ".$row["maxId"]."<br>";

					$maxId=$row["maxId"];
					for($i=$minid;$i<=$maxId;$i++){
						echo $_POST[$i]."<br>";
						$getrightoption="SELECT * FROM quesandans where qid='$i'";
						$result=$conn->query($getrightoption);
						$row=$result->fetch_assoc();
						if($_POST[$i]==$row["answer"]){
								$marks++;
						}
					}


					echo "Total Marks are ".$marks;
            }
?>

<html>
<head>
<title>Login page</title>
<style>
.button {
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="3.jpg">

<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<form>
<table cellspacing="50" align="center">
<tr>
<th width="15%">
<a href="homepg.php" class="button"><span>
Go to Home Page</span></a>
</th>
<th width="15%"><a href="login.php" class="button"><span>
Sign Out</span></a>
</th>
</tr>
</table>
</form>

</body>
</html>