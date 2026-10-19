<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>

<body>
    <div align="center">
        <form method="POST" action="process.php">
            <h1>Create new account</h1>
            <table>
                <tr>
                    <td>User name</td>
                    <td><input type="text" name="uname" required></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="tel" name="phone" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pswd" required></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="submit" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- username: <input type="text"> <br>
    phone: <input type="text"> <br>
    email: <input type="text"> <br>
    DOB: <input type="text"> <br>
    username: <input type="text"> <br>
    username: <input type="text"> <br> -->
</body>

</html>