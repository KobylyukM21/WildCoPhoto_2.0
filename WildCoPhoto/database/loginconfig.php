<?php
// Define an empty variable to store the error message
$errorMsg = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $host = 'localhost'; // Replace with your database host
    $database = 'wildcophoto'; // Replace with your database name
    $usernameDB = 'root'; // Replace with your database username
    $passwordDB = ''; // Replace with your database password

    $conn = new mysqli($host, $usernameDB, $passwordDB, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    // Check if a matching row is found
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        // Redirect the user to adminconsole.php
        header("Location: adminconsole.php");
        exit();
    } else {
        // Invalid username or password
        $errorMsg = "Invalid username or password.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>