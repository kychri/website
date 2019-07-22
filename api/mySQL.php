<!DOCTYPE html>
<html>
<head>
  <title> Displaying Viva Data in HTML Table </title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      color: #4286f4;
      font-family: monospace;
      font-size: 20px;
      text-align: left;
    }

    th {
      background-color: #4286f4;
      color: white;
    }

    tr:nth-child(even) {background-color: #f2f2f2f2}
    </style>
  </head>
  <body>

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

$sql = "SELECT * FROM nodeMCU";

$result = mysqli_query($conn, $sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Status</th>
<th>Time Accessed</th>
<th>RFID Tag</th>
</tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nodeMCU_id'] . "</td>";
    echo "<td>" . $row['viva_status'] . "</td>";
    echo "<td>" . $row['time_accessed'] . "</td>";
    echo "<td>" . $row['room_num'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
mysqli_close($conn);
?>

</body>
</html>
