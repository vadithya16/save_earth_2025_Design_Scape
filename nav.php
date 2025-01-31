<?php
// Ensure session_start() is called only once, regardless of where the script is included
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Start the session only if it's not already started
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save the Earth</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar">
    <div class="logo">
        <img src="images/logo.png" alt="Save Earth Logo">
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#resource">Resources</a></li>

        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- If user is logged in, show Logout link -->
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <!-- If user is not logged in, show Login link -->
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
    <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

</body>
</html>
