<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bbms"; // Database name 
$tbl_name="request_for_blood"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['name'];
$b=$_POST['blood_group'];
$c=$_POST['amount'];
$d=$_POST['contact'];
$e=$_POST['address'];
$f=$_POST['date'];

// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a', '$b', '$c', '$d', '$e', '$f')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
//echo "<BR>";
//echo "<a href='student_reg.php'>Add Another</a>";
//echo "<BR>";
//echo "<a href='index.php'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>