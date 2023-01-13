<?php
if(isset($_POST['submitted'])){
include('connect-mysql.php');

$user=$_POST["username"];


$sql = "UPDATE admin SET ausername='$user' WHERE aid='1'";
if(mysqli_query($dbcon, $sql)){
    echo "Records were updated successfully.";
	header("Location: adminrights.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbcon);
}
 
// Close connection
mysqli_close($dbcon);
}
?>


<html>
<head>
<script>
function formvalid()
{

var us=document.myform.username.value;

//username cannot be empty
if( us == null || us == "")
{
alert("Name cannot be empty!");
return false;
}

return true;

}

</script>
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
  <form name="myform" method="post" action="changeusername.php">
<input type="hidden" name="submitted" value="true"/>
  <tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="auser">Enter new username</label></font>
    <input type="text" id="auser" name="username" placeholder="Your new username...."/></h2>
</tr>
<tr>
<h2 align="center">

<input type="submit" value="submit"/></h2>
</tr>

</form>
</table>
</body>
</html>