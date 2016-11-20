<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="blood_bank_management "; // Database name 
$tbl_name="stock"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['a+'];
$b=$_POST['a-'];
$c=$_POST['o+'];
$d=$_POST['o-'];
$e=$_POST['ab+'];
$f=$_POST['ab-'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a','$b','$c','$d','$e','$f')");
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