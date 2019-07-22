
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Creating Array for JSON response
$response = array();

// Check if we got the field from the user
if (isset($_GET['nodeMCU_id']) && isset($_GET['viva_status']) && isset($_GET['time_accessed']) && isset($_GET['room_num'])) {

    $nodeMCU_id = $_GET['nodeMCU_id'];
    $viva_status = $_GET['viva_status'];
    $time_accessed = $_GET['time_accessed'];
    $room_num = $_GET['room_num'];

    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
	  require_once($filepath."/db_connect.php");


    // Connecting to database
    $db = new DB_CONNECT();

    // Fire SQL query to insert data in nodeMCU
    $result = mysql_query("INSERT INTO nodeMCU(nodeMCU_id, viva_status, time_accessed, room_num) VALUES('$nodeMCU_id', '$viva_status', '$time_accessed', '$room_num')");

    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted
        $response["success"] = 1;
        $response["message"] = "nodeMCU successfully created.";

        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";

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
