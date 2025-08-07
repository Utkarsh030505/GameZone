<?php
// Database connection
$servername = "localhost";
$db_username = "root"; 
$db_password = "";     
$dbname = "gamezone";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username already exists
    $check_sql = "SELECT pass FROM users WHERE username = '$username'";
    $check_result = $conn->query($check_sql);

    if ($check_result && $check_result->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        
        $insert_sql = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";

        if ($conn->query($insert_sql) === TRUE) {
            header("location: loginforms.php");
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
