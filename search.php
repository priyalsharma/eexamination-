<?php

DEFINE('DB_USER','root');
DEFINE('DB_PSWD','');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','eexamination');


$output= NULL;

if(isset($_POST['submit'])){
//connect to the databse	
$mysqli= mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

$search= $mysqli-> real_escape_string($_POST['search']);

$resultset = $mysqli->query("select * from summary WHERE Coursename ='$search'");

if($resultset -> num_rows > 0){
	while($rows = $resultset->fetch_assoc())
	{
			$cname=$rows['Coursename'];
			$summ=$rows['Summary'];
			
			$output= "Course: $cname<br>Summary: $summ";
	}
}
else{

$output= "No results";

}




	
}


/*

mysql_select_db("eexamination") or die("could not find db");
$output='';
//collect

if(isset($_POST['search'])){
	$searchq= $_POST['search'];
	$searchq= preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query=mysql_query("SELECT * from summary WHERE Coursename LIKE '%$searchq%' OR Summary LIKE '%$searchq%' ") or die("could not search");
	$count=mysql_num_rows($query);
	if($count == 0)
	{
			$output = 'There was no search results!!';
	}
	else
	{
		while($row = mysql_fetch_array($query))
		{
			$cname = $row['Coursename'];
			$summ = $row['Summary'];
			$id = $row['cid'];
			$output .='<div>'.$cname.' '.$summ.'</div>';



			}
	}
	
}*/
?>
<html>
<head>
<title>Search page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<body background="bg2.jpg">
<a href="login.php">
<img src="logo1.svg" style="width:230px;height:120px;">
</a>
<table align="center">
<tr>


<td>

<form action ="search.php" method="post">

<input type="text" name="search" placeholder="search course summary...."/>
<br>
<br>
<input type="submit" name="submit" value="Search"/>


</form>

<?php

echo $output;
?>
</td>

</table>

<br>
<br>
<br><br><br><br><br><h1 align="center">
<a href="homepg.php" class="button"><span>Back</span></a></h1>

</body>

</html> 