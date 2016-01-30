<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="prayer"; // Database name 
$tbl_name="prayer_requests"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name="todd";//POST['name'];
$phone_number="1234567";//$_POST['phone_number'];
$email="travisleeis";//$_POST['email'];
$request="bla bla bla";//$_POST['request'];
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, phone_number, email, request)VALUES('$name', '$phone_number', '$email', '$request')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='/'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>