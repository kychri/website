<?php
$cpanel = new CPANEL(); // Connect to cPanel - only do this once.

// Create a new database.
$create_db = $cpanel->uapi(
    'Mysql', 'create_database',
    array(
        'test_PHP'    => 'newdb',
    )
);
?>
