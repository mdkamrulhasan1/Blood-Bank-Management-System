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


$q=$_POST['name'];
$w=$_POST['blood_group'];
$e=$_POST['amount'];
$r=$_POST['contact'];
$t=$_POST['address'];
$y=$_POST['date'];


$sql = "INSERT INTO request_for_blood (name ,blood_group ,amount, contact, address, date,)  VALUES ('$q','$w','$e','$r','$t','$y')";

if ($conn->query($sql)==TRUE) {
echo "You now successfully Submit";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>