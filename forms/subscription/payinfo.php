<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "gamezone"; // Database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data from POST request
$name = $_POST['name'];
$cardNumber = $_POST['cardNumber'];
$cvv = $_POST['cvv'];
$tier = $_POST['membership'];

// Insert data into the database
$sql = "INSERT INTO buyers (name, card, cvv, tier) VALUES ('$name', '$cardNumber', '$cvv', '$tier')";

if ($conn->query($sql) === TRUE) {
    $message = "Record inserted successfully.";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            text-align: center;
            color: #fff;
            padding: 20px;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Transparent black background */
            padding: 40px;
            border-radius: 10px;
            display: inline-block;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Submission Result</h2>
        <p><?php echo $message; ?></p>
        <br>
        <button onclick="window.location.href='index.php'">Go Back</button>
    </div>
</body>
</html>
