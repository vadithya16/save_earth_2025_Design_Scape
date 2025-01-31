<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
      <?php include 'nav.php'; ?>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <!-- Form for login -->
            <form action="login_process.php" method="POST">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <a href="#">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
            
            <!-- Show any error messages -->
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p style='color: red;'>".$_SESSION['error']."</p>";
                unset($_SESSION['error']); // Clear the error message
            }
            ?>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
