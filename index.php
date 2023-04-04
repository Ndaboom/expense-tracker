<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Start session
session_start();
include('db.php');

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = 'Please enter both username and password';
        header('Location: index.php');
        exit;
    }

    // Query database for user
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => sha1($password)]);

    if ($stmt->rowCount() > 0) {
        // User found, set session variable and redirect to dashboard
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        // User not found, set error message and redirect to login page
        $_SESSION['error'] = 'Invalid username or password';
        header('Location: login.php');
        exit;
    }

    // Close database connection
    $conn = null;
}

?>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <div class="login-form">
        <h2>Login Form</h2>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>