<?php
include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<p>User deleted successfully </p>";
    header("location: read.php");
} else {
    echo "<p>Failed to delete the user</p>";
}
