<?php

$servername = "localhost";
$database = "Christ_Viva_iot";
$username = "chosen96";
$password = "NCState2019#";

class DB_CONNECT {

    // Constructor
    function __construct() {
        // Trying to connect to the database
        $this->connect();
    }

    // Destructor
    function __destruct() {
        // Closing the connection to database
        $this->close();
    }

   // Function to connect to the database
    function connect() {

        //importing dbconfig.php file which contains database credentials
        $filepath = realpath (dirname(__FILE__));

        require_once($filepath."/dbconfig.php");

		    // Connecting to mysql (phpmyadmin) database
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        if (!$conn) {

            die("Connection failed: " . mysqli_connect_error());

        }
        echo "Connected successfully \n";

        // returing connection cursor
        return $conn;
    }

	// Function to close the database
    function close() {
        // Closing data base connection
        mysqli_close();
    }

}

?>
