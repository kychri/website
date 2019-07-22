<?php
	# Sample Database Connection Syntax for PHP and MySQL.
	$hostname="localhost";
	$username="chosen96";
	$password="NCState2019#";
	$dbname="Christ_Viva_iot";
	$usertable="nodeMCU";
	$yourfield = "nodeMCU_id";

  // Create connection
	$conn = mysqli_connect($hostname,$username, $password, $database);

  // Check connection
  if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

  }

  /*
  echo "Connected successfully!"

  $sql = "INSERT INTO nodeMCU(nodeMCU_id, viva_status, time_accessed, room_num) VALUES(003, 'Locked', '3/15/2019 5:05 PM', 225)";

  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  */
  mysqli_close();
?>
