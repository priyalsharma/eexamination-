<?php
DEFINE('DB_USER','root');
DEFINE('DB_PSWD','');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','eexamination');

$dbcon= mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
/*
if(!$dbconn)
{
die('error connecting to database');
}
echo('you have connected successfully');
*/
?>