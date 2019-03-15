<?php

$email = $_POST['email'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass2'];





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

$sql = "SELECT * FROM login_info WHERE email_address = '$email'";
$result = mysqli_query($conn, $sql);

$row = $result->fetch_array(MYSQLI_ASSOC);
$p = $row["password"];

  
    if (strcmp($p, $oldpass) == 0){
        echo "Correct";
        
        $sql = "UPDATE login_info SET password='$newpass' WHERE email_address = '$email'";
        $conn->query($sql);

    }
    else{
        echo "Incorrect";
    }


$conn->close();
?>