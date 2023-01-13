<html>
<head>
<title>Student Login Page</title>ssss

<script>
function formvalid1()
{

var us=document.myform1.username.value;
var pa=document.myform1.password.value;
	

var digits=/^[0-9]+$/;
var letters=/^[A-Z a-z]+$/;

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
<font size="32" face="Comic Sans MS" color="white">Student Login Page</font>
</h1>
<div>
<table>
<tr>
  <form name="myform1" method="post" action="studentauth.php" onsubmit="return formvalid1()">
  <input type="hidden" name="submitted" value="true"/>
  
   
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
  </table>
</div>
</body>
</html>