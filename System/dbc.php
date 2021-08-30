<?php

$db_host = "localhost";
$db_name = "bus_booking";
$db_user = "root";
$db_pass = "";

// database connection
$dbc = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($dbc->connect_errno) {
	echo "database error";
}

$dbc->select_db($db_name); 
