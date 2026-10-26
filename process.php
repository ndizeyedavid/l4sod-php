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
    header("location: read.php");
} else {
    echo "Failed to register a new user";
}
