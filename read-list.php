<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All users</title>
</head>

<body>
    <h1>Users in our DB</h1>
    <ul>
        <?php
        $data = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <li><?php echo $row['names'] ?> | <?php echo $row['email'] ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>