<?php
if(isset($_POST['submitted'])){
include('connect-mysql.php');

$qid=$_POST["qid"];

$question=$_POST["qname"];

$optionsa=$_POST["optionsa"];
$optionsb=$_POST["optionsb"];
$optionsc=$_POST["optionsc"];
$optionsd=$_POST["optionsd"];

$answer=$_POST["answer"];


$sql1 = "UPDATE quesandans SET question='$question' WHERE qid='$qid'";
$sql2 = "UPDATE quesandans SET a='$optionsa' WHERE qid='$qid'";
$sql3 = "UPDATE quesandans SET b='$optionsb' WHERE qid='$qid'";
$sql4 = "UPDATE quesandans SET c='$optionsc' WHERE qid='$qid'";
$sql5 = "UPDATE quesandans SET d='$optionsd' WHERE qid='$qid'";

$sql6 = "UPDATE quesandans SET answer='$answer' WHERE qid='$qid'";

if(mysqli_query($dbcon, $sql1) && mysqli_query($dbcon, $sql2) && mysqli_query($dbcon, $sql3) && mysqli_query($dbcon, $sql4) && mysqli_query($dbcon, $sql5) && mysqli_query($dbcon, $sql6)){
    
	
	echo "Records were updated successfully.";
	header("Location: adminrights.php");
} else {
 //   echo "ERROR: Could not able to execute $sq1. " . mysqli_error($dbcon);
}
 
// Close connection
mysqli_close($dbcon);
}
?>


<html>
<head>
<style>

input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #FFCBA4;
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

input[type=password] {
	width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

div {
    border-radius: 5px;   
    padding: 50px;
}

</style>
</head>
<body background="22.jpg">
<br><br><br><br><br><br><br><br><br><br>
<table align="center">
  <form name="myform" method="post" action="updateq.php">
<input type="hidden" name="submitted" value="true"/>
  <tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="qid">Enter qid of question to be updated</label></font>
    <input type="text" id="qid" name="qid" placeholder="Your qid...."/></h2>
</tr>

 <tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="qname">Enter new question</label></font>
    <input type="text" id="qname" name="qname" placeholder="Your new question...."/></h2>
</tr>

<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="optionsa">Enter new option a</label></font>
    <input type="text" id="optionsa" name="optionsa" placeholder="Your new option a...."/></h2>
</tr>

<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="optionsb">Enter new option b</label></font>
    <input type="text" id="optionsb" name="optionsb" placeholder="Your new option b...."/></h2>
</tr>

<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="optionsc">Enter new option c</label></font>
    <input type="text" id="optionsc" name="optionsc" placeholder="Your new option c...."/></h2>
</tr>

<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="optionsd">Enter new option d</label></font>
    <input type="text" id="optionsd" name="optionsd" placeholder="Your new option d...."/></h2>
</tr>

<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="answer">Enter new answer</label></font>
    <input type="text" id="answer" name="answer" placeholder="Your new answer...."/></h2>
</tr>



<tr>
<h2 align="center">

<input type="submit" value="submit"/></h2>
</tr>

</form>
</table>
</body>
</html>