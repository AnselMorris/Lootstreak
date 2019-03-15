<?php

$email = $_POST['suemail'];
$pass = $_POST['supsw'];
$twitch = $_POST['twitch'];
$gamertag = $_POST['gamertag'];

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

$sql = "INSERT INTO login_info (email_address, password, twitch, gamertag)
VALUES ('$email', '$pass', '$twitch', '$gamertag')";



if ($conn->query($sql) === TRUE) {
    echo "\t\t\t\t\t    Account Created!";
} else {
   
    echo "\t\t This email is already linked to an account.";

}

$conn->close();
?>