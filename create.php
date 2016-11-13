<?php 
 
/*
connect to the database
*/
 
require_once "connect.php";
 
/*
create the mysql query
 
What this query means is php calls mysql to insert values into the table users. It then asks for the fields you want to add data too then the values for that certain field in ascending order.
 
*/
 
$sql = "INSERT INTO rose_pengguna (nama_pengguna, pw_pengguna) VALUES ('mira', '123')";
 
$query = mysqli_query($con, $sql);
 
mysqli_close($con);

echo 'success';
 
?>