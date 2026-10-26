<?php
require "connect.php";

$id = rand();
$username = $_POST['uname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$hashPassword = md5($password);
$createdAt = date("Y-m-d");

$register = mysqli_query($conn, "INSERT INTO users(id, names, email, password, createdAt, phone) VALUES($id, '$username', '$email', '$hashPassword', '$createdAt', '$phone')");

if ($register) {
    echo "User($username) has been registered";
} else {
    echo "Failed to register a new user";
}
echo "we are haveing fun ";
