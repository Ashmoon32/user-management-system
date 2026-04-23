<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="" method="POST">
        <div>
            <label for="name">Username</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
        </div><br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
        </div><br>

        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
        </div><br>

        <div>
            <label for="age">Age</label><br>
            <input type="number" name="age" id="age" min="1" max="100" placeholder="1-100" required>
        </div><br>

        <div>
            <label>Gender</label><br>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
        </div><br>

        <div>
            <label for="phno">Phone Number</label><br>
            <input type="tel" name="phno" id="phno" placeholder="+959-798382273" required>
        </div><br>

        <button type="submit" name="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here!</a></p>
</body>

</html>