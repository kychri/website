<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

define('DB_USER', "chosen96"); // Database user name
define('DB_PASSWORD', "NCState2019#") // Database Password
define('DB_DATABASE', "Christ_Viva_iot"); // Database name
define('DB_SERVER', "localhost") // Database server (probs local host)

// Connecting to mysql (phpmyadmin) database
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully \n";

//Creating Array for JSON response
$response = array();

// Check if we got the database fields from the user

# If using auto increment for the nodeMCU ID then use:
# if (isset($_GET['nodeMCU_id']) && isset($_GET['viva_status']) && isset($_GET['time_accessed']) && isset($_GET['room_num'])) {

if (isset(isset($_GET['viva_status']) && isset($_GET['time_accessed']) && isset($_GET['room_num'])) {

    // Retrieve the values from nodeMCU
    $status = $_GET['viva_status'];
    $access_time = $_GET['time_accessed'];
    $hospital_room = $GET_['room_num'];

    // Fire SQL query to insert data in nodeMCU
    $sql = "INSERT INTO nodeMCU(viva_status, time_accessed, room_num) VALUES('$status', '$access_time', '$hospital_room')";
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

mysqli_close();
?>
