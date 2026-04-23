<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="" method="POST">
        <div>
            <label for="name">Username</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
        </div><br>

        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div><br>

        <button type="submit" name="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here!</a></p>
</body>

</html>