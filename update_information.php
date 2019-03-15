<?php

$curremail = $_POST['curremail'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$email = $_POST['email'];



$servername = "localhost";
$username = "anselmorris";
$password = "Tue70tue0";
$dbname = "lootstreak_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "UPDATE login_info SET first_name='$firstname', last_name='$lastname', city_town='$city', email_address='$email'  WHERE email_address = '$curremail'";

$conn->query($sql);

$sql = "SELECT * FROM login_info WHERE email_address = '$email'";


$result = mysqli_query($conn, $sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$p = $row["password"];
$t = $row["twitch"];
$g = $row["gamertag"];
$fn = $row["first_name"];
$ln = $row["last_name"];
$co = $row["country"];
$ci = $row["city_town"];
$cp = $row["confidence_points"];
echo "T:$t,G:$g,FN:$fn,LN:$ln,CO:$co,CI:$ci,CP:$cp";


$conn->close();
?>