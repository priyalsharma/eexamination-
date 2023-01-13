<?php
//I will First build my dataset

$conn = new mysqli("localhost","root","","eexamination");
            if($conn -> connect_error){
                echo "Error connecting .Please try again".$conn -> connect_error;
            }
            else{
           				$sqlget="Select * from quesandans";

           				$result=$conn->query($sqlget);
 			
	            }


?>

<html>
<head><title>Display questions</title>
<style type="text/css">
table{

background-color: white;
align: center;
}
th{
border-bottom: 5px solid #000;
}
td{
	border-bottom: 2px solid #666;
	
}
input[type=submit] {
    width: 50%;
    background-color: red;
    color: Black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


</style>
</head>
<body background="3.jpg" >
<h1 align="center">Displaying all the questions....</h1>
<?php
/*include('connect-mysql.php');
$sqlget="Select qid, question, options from quesandans";
$sqldata=mysqli_query($dbcon,$sqlget) or die('error getting data');
echo "<table>";
echo "<form>";
echo "<tr><th>QID</th><th>Questions</th><th>Options</th></tr>";

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	echo"<tr><td>";
	echo $row['qid'];
	echo"</td><td>";
	echo $row['question'];
	echo"</td><td>";
	echo ?><input type="radio" value=<?php echo"$row['options']";?>/>
	<?php
	echo"</td></tr>";	
	}
	echo "</form>"
echo"</table>";	
*/	?>

<form action="evaluateresult.php" method="POST">
<?php
		while ($row=$result->fetch_assoc()) {
			
		

?>


<div style="margin-top: 100px;">
<h1><?php echo $row["question"]; ?></h1><br>

<?php echo $row["a"]; ?>
<input type="radio" name="<?php echo $row["qid"]; ?>" value="a"><br>
<?php echo $row["b"]; ?>
<input type="radio" name="<?php echo $row["qid"]; ?>" value="b"><br>	
<?php echo $row["c"]; ?>
<input type="radio" name="<?php echo $row["qid"]; ?>" value="c"><br>
<?php echo $row["d"]; ?>
<input type="radio" name="<?php echo $row["qid"]; ?>" value="d"><br>

</div>



<?php
		}//while loop closes
?>
<h1 align="center">
<input type="submit"  value= "Submit"></h1>
</form>
</body>
</html>