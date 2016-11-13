/*
All code inside these tags will be recognized as php code.
*/
 
<?php
 
/*
Database vars that we use to connect to our mysql database. Change the values to your database settings.
*/
 
$db_name = "rose";
$db_username = "root";
$db_password = "";
$db_host = "localhost";
 
/*
mysql_connect is a built in function that allows us to make an easy connection.
*/
 
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
 
/*
mysql_select_db is a built in function that allows us to select the database. This is an essential function.
 
We use the 'die' function to check for errors.
 
*/
 
mysqli_select_db($con, $db_name) or die (mysqli_error());
 
echo 'success';
 
?>