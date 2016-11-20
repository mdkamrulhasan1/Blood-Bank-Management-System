<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 


$a=$_POST['a+'];
$b=$_POST['a-'];
$c=$_POST['o+'];
$d=$_POST['o-'];
$e=$_POST['ab+'];
$f=$_POST['ab-'];

$sql = "INSERT INTO stock (a+, a-, o+, o-, ab+, ab-)  VALUES ('$a','$b','$c','$d','$e','$f')";

if ($conn->query($sql)==TRUE) {
echo "You now successfully Submit";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>