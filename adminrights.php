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
<body background="22.jpg">

<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<form>
<table cellspacing="100" align="center">
<tr>
<th>
<a href="deleteq.php" class="button">
<span>Delete a question</span></a>
</th>
<th>
<a href="updateq.php" class="button"><span>Update a question</span>
</a>
</th>
</tr>
<tr>
<th>
<a href="insertq.php" class="button">
<span>Insert a question</span></a></th>
<th>
<a href="viewq.php" class="button">
<span>View question list</span></a></th>
</tr>

<tr>
<th>
<a href="changeusername.php" class="button">
<span>change username</span></a></th>
<th>
<a href="changepassword.php" class="button">
<span>change password</span></a></th>
</tr>

</table>

<h1 align="center">
<a href="homepg.php" class="button">
<span>SIGN OUT</span></a></h1>


</form>

</body>
</html>