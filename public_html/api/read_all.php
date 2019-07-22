<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


//Creating Array for JSON response
$response = array();

// Include data base connect class
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/db_connect.php");

 // Connecting to database
$db = new DB_CONNECT();

 // Fire SQL query to get all data from nodeMCU
$result = mysql_query("SELECT *FROM nodeMCU") or die(mysql_error());

// Check for succesfull execution of query and no results found
if (mysql_num_rows($nodeMCU) > 0) {

	// Storing the returned array in response
    $response["nodeMCU"] = array();

	// While loop to store all the returned response in variable
    while ($row = mysql_fetch_array($result)) {
        // temperoary user array
        $nodeMCU = array();
        $nodeMCU["nodeMCU_id"] = $row["nodeMCU_id"];
        $nodeMCU["viva_status"] = $row["viva_status"];
		    $nodeMCU["time_accessed"] = $row["time_accessed"];
        $nodeMCU["room_num"] = $row["room_num"];

		// Push all the items
        array_push($response["nodeMCU"], $nodeMCU);
    }
    // On success
    $response["success"] = 1;

    // Show JSON response
    echo json_encode($response);
}
else
{
    // If no data is found
	  $response["success"] = 0;
    $response["message"] = "No data on Viva found";

    // Show JSON response
    echo json_encode($response);
}
?>
