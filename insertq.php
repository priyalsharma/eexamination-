<?php
if(isset($_POST['submitted'])){
include('connect-mysql.php');

$question=$_POST["question"];
$optiona=$_POST["optionsa"];
$optionb=$_POST["optionsb"];
$optionc=$_POST["optionsc"];
$optiond=$_POST["optionsd"];
$answer=$_POST["answer"];

$sqlinsert="INSERT INTO quesandans(question,a,b,c,d,answer)VALUES('$question','$optiona','$optionb','$optionc','$optiond','$answer')";
	if(!mysqli_query($dbcon, $sqlinsert)){
	die('error inserting new record');
		header("Location:insertq.php");

	}
	header("Location:adminrights.php");

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
<div>
<table>
<tr>
  <form name="myform" method="post" action="insertq.php">
  <input type="hidden" name="submitted" value="true"/>
  
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="question">Enter new question to be inserted</label></font>
    <input type="text" id="question" name="question" placeholder="Your new question...."/></h2>
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
<font face="Comic Sans MS" color="white"><label for="optionsa">Enter new option c</label></font>
    <input type="text" id="optionsc" name="optionsc" placeholder="Your new option c...."/></h2>
</tr>	
 	
	
	<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="optionsd">Enter new option d</label></font>
    <input type="text" id="optionsd" name="optionsd" placeholder="Your new option d...."/></h2>
</tr>	
	
 <tr>
 
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="answer">Enter appropriate answer option</label></font>
    <input type="text" id="answer" name="answer" placeholder="Your new answer...."/>   </h2>
</tr>
<tr>
    <h2 align="center"><br><input type="submit" value="Submit"/></h2>
	</tr>

</div>

</body>
</html>