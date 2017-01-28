<?php
########## MySql details (Replace with yours) #############
$hostname = "localhost"; //hostname
$username = "dekmi935_opnblda"; //mysql username
$password = "s@&5IH4u"; //mysql password
$dbname = 'dekmi935_partyfinder'; //databasename

//connect to database
$mysqli = new mysqli($hostname, $username, $password, $dbname);

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Falha de Conexâo: " . $conn->connect_error);
}; 


?>