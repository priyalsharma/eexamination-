<?php
if(isset($_POST['submitted'])){
include('connect-mysql.php');

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$loc=$_POST["loc"];
$email=$_POST["emailid"];
$phno=$_POST["phoneno"];
$user=$_POST["username"];
$pass=$_POST["password"];
$salt = substr($user, 0, 2);
$crypted_pass = crypt($pass, $salt);
$sqlinsert="INSERT INTO student(firstname,lastname,location,email,phoneno,username,password)VALUES('$fname','$lname','$loc','$email','$phno','$user','$crypted_pass')";
	if(!mysqli_query($dbcon, $sqlinsert)){
	die('error inserting new record');
	header("Location:signup.php");
	}
	header("Location:homepg.php");

}
?>

<html>
<head>
<title>SignUp page</title>

<script>
function formvalid()
{
var f=document.myform.firstname.value;
var l=document.myform.lastname.value;
//var lo=document.myform.loc.value;
var em=document.myform.emailid.value;
var ph=document.myform.phoneno.value;
var us=document.myform.username.value;
var pa=document.myform.password.value;
	

var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var digits=/^[0-9]+$/;
var letters=/^[A-Z a-z]+$/;

//firstname not empty
if( f==null || f=="")
{
alert("first name cannot be empty!");
return false;
}

//firstname should contain only letters
if(!letters.test(f))
{
alert("first name cannot contain numbers");
return false;
}

//lastname not empty
if( l == null || l == "")
{
alert("last name cannot be empty!");
return false;
}
//lastname should contain only letters
if(!letters.test(l))
{
alert("last name cannot contain numbers");
return false;
}
//email id cannot be empty
if(em == null || em == "")
{
alert("Email cannot be empty");
return false;
}

//enter valid emailid
if(!mailformat.test(em))
{
alert("Please enter valid Email-id");
return false;
}

//phone no. cannot be empty
if( ph == null || ph == "")
{
alert("number cannot be empty!");
return false;
}


//phone no should not exceed 10 digits
if(!(ph.length==10))
{
alert("contact no must contain only 10 digits");
return false;
}

//username cannot be empty
if( us == null || us == "")
{
alert("Name cannot be empty!");
return false;
}

//password cannot be empty
if( pa == null || pa == "")
{
alert("Name cannot be empty!");
return false;
}
//4<=passwd<=12
	
	if( pa.length<=4 || pa.length>12)
{
alert("password cannot be less than 4 or greater than 12");
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
<h1 align="center">
<font size="32" face="Comic Sans MS" color="white">Sign up</font>
</h1>
<div>
<table>
<tr>
  <form name="myform" method="post" action="signup.php" onsubmit="return formvalid()">
  <input type="hidden" name="submitted" value="true"/>
  
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="fname">First Name</label></font>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."/></h2>
</tr>
<tr>	
 	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="lname">Last Name</label></font>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."/></h2>
</tr>
<tr>
 
	
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="loc">Location</label></font>
    <select id="loc" name="loc">
      <option value="Mumbai">Mumbai</option>
      <option value="Pune">Pune</option>
      <option value="Delhi">Delhi</option>
	  <option value="Chennai">Chennai</option>
 
    </select></h2>
</tr>
 <tr>
 
    <h2 align="center">
<font face="Comic Sans MS" color="white"><label for="email">Email ID</label></font>
    <input type="text" id="email" name="emailid" placeholder="Your Email ID...."/>   </h2>
</tr>
<tr>	
	
	<h2 align="center">
<font face="Comic Sans MS" color="white"><label for="phno">Phone No.</label></font>
    <input type="text" id="phno" name="phoneno" placeholder="Your Phone Number...."/></h2>
</tr>
<tr>
<h2 align="center">
<font face="Comic Sans MS" color="white">
	<label for="user">Username</label></font>
    <input type="text" id="user" name="username" placeholder="Your User Name...."/></h2>	
</tr>
<tr>	
	
	<h2 align="center">
<font face="Comic Sans MS" color="white"><label for="pass">Password</label></font>
    <input type="password" id="pass" name="password" placeholder="Your Password...."/></h2>
</tr>  
  <tr>
    <h2 align="center"><br><input type="submit" value="Submit"/></h2>
	</tr>
  </form>
  
</div>

</body>
</html>