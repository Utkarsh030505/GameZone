<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="regstyle.css">
</head>
<body>
    <div class="registration-container">
        <h2>Registration Form</h2>
        <form action="registerHandler.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Enter your username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
