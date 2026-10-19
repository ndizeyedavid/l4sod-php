<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "mellow_db";

$conn = mysqli_connect($serverName, $username, $password, $databaseName);
if ($conn) {
    echo "COnnection Successful";
} else {
    echo "Failed to conenct to DB";
}
