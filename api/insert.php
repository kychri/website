<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Creating Array for JSON response
$response = array();

// Check if we got the database fields from the user

# If using auto increment for the nodeMCU ID then use:
if (isset($_GET['nodeMCUid']) && isset($_GET['vivastatus']) && isset($_GET['timeaccessed']) && isset($_GET['roomnum'])) {
# if (isset(isset($_GET['viva_status']) && isset($_GET['time_accessed']) && isset($_GET['room_num'])) {

    // Retrieve the values from nodeMCU
    $nodeMCU_id = $_GET['nodeMCUid'];
    $viva_status = $_GET['vivastatus'];
    $time_accessed = $_GET['timeaccessed'];
    $room_num = $GET_['roomnum'];

    echo($nodeMCU_id);
    echo($viva_status);
    echo($time_accessed);
    echo($room_num);

    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
	  require_once($filepath."/db_connect.php");

    // Connecting to database
    $db = new DB_CONNECT();

    // Fire SQL query to insert data in nodeMCU
    $sql = "INSERT INTO nodeMCU(viva_status, time_accessed, room_num) VALUES('$viva_status', '$time_accessed', '$room_num')";
    #$result = mysqli_query("INSERT INTO nodeMCU(viva_status, time_accessed, room_num) VALUES('$status', '$access_time', '$hospital_room')");

    $result = mysqli_query("INSERT INTO nodeMCU(nodeMCU_id, viva_status, time_accessed, room_num) VALUES('$nodeMCU_id', '$viva_status', '$time_accessed', '$room_num')");

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
