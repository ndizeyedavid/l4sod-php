<?php
include "connect.php";

$id = $_POST['id'];
$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$phone = $_POST['phone'];

$sql = "UPDATE users SET names='$name', email='$email', password='$password', phone='$phone' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<p>User Updated Successfully</p>";
    echo "<a href='read.php'>Go back</a>";
} else {
    echo "<p>Failed to update the user</p>";
}
