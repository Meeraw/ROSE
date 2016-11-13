<?php 
 
/*
connect to our database
*/
 
include_once "connect.php";
 
/*
we post the variables we recieve from flash
*/
 
$username = $_POST['txt_nama'];
$password = $_POST['txt_pw'];
 
/* 
if flash called the login system the code below runs
*/
 
if ($_POST['systemCall'] == "login") {
     
/*
The * means the query initally selects all the records in the database.
Then the query filters out any records that are not the same as what the user entered.
*/
 
 
$sql = "SELECT * FROM rose_pengguna WHERE nama_pengguna='$username' AND pw_pengguna='$password'";
 
$query = mysqli_query($con, $sql);
 
/*
This counts how many records match our query
*/
 
$login_counter = mysqli_num_rows($query);
 
/*
if $login_counter is greater we send a message back to flash and get the data from the database
*/
 
if ($login_counter > 0) {
 
/*
we use a while loop to get the user's bio. mysql_fetch_array gets all the field's data for the particular record.
*/
 
while ($data = mysqli_fetch_array($query)) {
     
/*
gets the user_bio value from the selected record
*/
 
//$userbio = $data["user_bio"];
 
/*
use the print function to send values back to flash
*/
 
//print "systemResult=$userbio";
 
}
 
} else {
 
print "systemResult=The login details dont match our records.";
 
}
 
}
 
?>