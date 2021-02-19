<?php
$db_username = 'root';
$db_password = '';
$db_name = 'bd_cgames';
$db_host = 'localhost';
$items_per_group = 5;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>
