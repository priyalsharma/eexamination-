<html>
<head><title>Display questions</title>
<style type="text/css">
table{
border: 2px solid red;
background-color: white;
align: center;
}
th{
border-bottom: 5px solid #000;
}
td{
	border-bottom: 2px solid #666;
	
}
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
</head>
<body background="22.jpg">
<h1 align="center">Displaying all the questions....</h1>
<?php
include('connect-mysql.php');
$sqlget="Select * from quesandans";
$sqldata=mysqli_query($dbcon,$sqlget) or die('error getting data');
echo "<table>";
echo "<tr><th>QID</th><th>Questions</th><th>Option a</th><th>Option b</th><th>Option c</th><th>Option d</th><th>Answers</th></tr>";

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	echo"<tr><td>";
	echo $row['qid'];
	echo"</td><td>";
	echo $row['question'];
	echo"</td><td>";
	echo $row['a'];
	echo"</td><td>";
	echo $row['b'];
	echo"</td><td>";
	echo $row['c'];
	echo"</td><td>";
	echo $row['d'];
	echo"</td><td>";
	echo $row['answer'];
	echo"</td></tr>";	
	}
echo"</table>";	
	?>
	
	<br><br><br><br><br><br><br>
<h1 align="center">
<a href="adminrights.php" class="button"><span>Back</span></a></h1>
</body>
</html>