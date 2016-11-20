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


$a=$_POST['name'];
$b=$_POST['blood_group'];
$c=$_POST['last_donation_date'];
$d=$_POST['gender'];
$e=$_POST['contact_no'];
$f=$_POST['weight'];
$g=$_POST['date_of_birth'];
$h=$_POST['living_district'];
$i=$_POST['email'];


$sql = "INSERT INTO donor (name ,blood_group ,last_donation_date, gender, contact_no, weight, date_of_birth, living_district, email)  VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

if ($conn->query($sql)==TRUE) {
echo "You now successfully Submit";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>