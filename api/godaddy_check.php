<?php
	# Sample Database Connection Syntax for PHP and MySQL.
	$hostname="localhost";
	$username="chosen96";
	$password="NCState2019#";
	$dbname="Christ_Viva_iot";
	$usertable="nodeMCU";
	$yourfield = "nodeMCU_id";

	mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysql_select_db($dbname);

	# Check If Record Exists
	$query = "SELECT * FROM $usertable";
	$result = mysql_query($query);

	if($result){
		while($row = mysql_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."<br/>";
		}
	}
?>
