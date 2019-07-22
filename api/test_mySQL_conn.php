<?php
$servername = "localhost";
$database = "Christ_Viva_iot";
$username = "chosen96";
$password = "NCState2019#";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully \n";

$sql = "INSERT INTO nodeMCU(nodeMCU_id, viva_status, time_accessed, room_num) VALUES (004, 'Locked', '3/15/2019 8:12 PM', 6969)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
