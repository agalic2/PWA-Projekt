<?php
$server = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'novostirh'; 

$dbc = new mysqli($server, $username, $password, $database);

if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}
?>
