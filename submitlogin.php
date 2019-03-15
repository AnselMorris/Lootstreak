<?php

$email = $_POST['liemail'];
$pass = $_POST['lipsw'];

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
$t = $row["twitch"];
$g = $row["gamertag"];
$fn = $row["first_name"];
$ln = $row["last_name"];
$co = $row["country"];
$ci = $row["city_town"];
$cp = $row["confidence_points"];
    
if(mysqli_num_rows($result) != 0){
 
   
  
    if (strcmp($p, $pass) == 0){
        echo "T:$t,G:$g,FN:$fn,LN:$ln,CO:$co,CI:$ci,CP:$cp";
    }
    else{
        echo "Incorrect Password";
    }
}
else{

    echo "Account Does Not Exist";
}
    
$conn->close();
?>