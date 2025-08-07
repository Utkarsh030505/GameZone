<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Login Form</h2>
        <form action="loginformHandler.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Enter your username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
