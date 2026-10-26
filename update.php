<?php
include "connect.php";
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User | User Id:
        <?php echo $id ?>
    </title>
</head>

<body>
    <h1>Updating user:
        <?php echo $result['names'] ?>
    </h1>
    <form action="update_process.php" method="post">
        <input type="hidden" value="<?php echo $result['id'] ?>" name="id">
        Name: <input type="text" name="uname" value="<?php echo $result['names'] ?>" required> <br><br>
        Email: <input type="email" name="email" value="<?php echo $result['email'] ?>" required> <br><br>
        Password: <input type="password" name="pswd" value="<?php echo $result['password'] ?>" required> <br><br>
        Phone: <input type="tel" name="phone" value="<?php echo $result['phone'] ?>" required> <br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>