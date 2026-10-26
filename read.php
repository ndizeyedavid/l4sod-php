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
    <table border="1" style="width: 100%;">
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>createdAt</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM users");
        echo "Total Number of users: " . mysqli_num_rows($data);
        $count = 1;
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td>
                    <?php echo $count; ?>
                </td>
                <td>
                    <?php echo $row['id'] ?>
                </td>
                <td>
                    <?php echo $row['names'] ?>
                </td>
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <?php echo $row['password'] ?>
                </td>
                <td>
                    <?php echo $row['createdAt'] ?>
                </td>
                <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
            </tr>
        <?php
            $count++;
        }
        ?>
    </table>
</body>

</html>