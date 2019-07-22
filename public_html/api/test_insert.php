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

$response = array();

// Chech to make sure parameter varibles are present
// if (isset($_GET['nodeMCU_id']) && isset($_GET['viva_status']) && isset($_GET['time_accessed']) && isset($_GET['room_num'])) {
if (isset($_GET['viva_status']) && isset($_GET['time_accessed']) && isset($_GET['room_num'])) {

    // Retrieve the values from nodeMCU
    // $nodeMCU_id = $_GET['nodeMCU_id'];
    $viva_status = $_GET['viva_status'];
    $time_accessed = $_GET['time_accessed'];
    $room_num = $_GET['room_num'];

    // Print retrieved values
    // echo($nodeMCU_id . "\n");
    echo($viva_status . "\n");
    echo($time_accessed . "\n");
    echo($room_num . "\n");

    // Fire SQL query to insert data in nodeMCU
    // $sql = "INSERT INTO nodeMCU(nodeMCU_id, viva_status, time_accessed, room_num) VALUES('$nodeMCU_id', '$viva_status', '$time_accessed', '$room_num')";
    $sql = "INSERT INTO nodeMCU(viva_status, time_accessed, room_num) VALUES('$viva_status', '$time_accessed', '$room_num')";

    $result = mysqli_query($conn, $sql);

    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted
        $response["success"] = 1;
        $response["message"] = "Successfully inserted row from nodeMCU to Viva_iot database.";

        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Error while making database insert";

        // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";

    // Show JSON response
    echo json_encode($response);
}

?>
