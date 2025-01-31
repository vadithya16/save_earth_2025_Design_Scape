<?php
session_start();

// Enable error reporting for debugging (remove this in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost"; // Your server name (usually localhost)
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "sit";           // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate the input
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Both fields are required!";
        header('Location: login.php');
        exit();
    }

    // Check if the email exists in the database
    $sql = "SELECT * FROM user WHERE username = ?";  // Using email as username
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, now verify password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct, start a session and store user data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];  // This stores email as username

            // Redirect to the profile page
            header('Location: profile.php');
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password!";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Email not found!";
        header('Location: login.php');
        exit();
    }
}
?>
