<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$db_username = "root"; // Replace with your MySQL username
$db_password = "";     // Replace with your MySQL password
$dbname = "gamezone";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT pass FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Compare the provided password with the stored password
        if ($password === $row['pass']) { // Replace with password_verify if using hashed passwords
            $_SESSION['username'] = $username; // Store the username in the session
            header("Location: ../index.php"); // Redirect to the index page
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
