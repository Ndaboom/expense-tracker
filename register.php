<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Start session
session_start();
include('db.php');

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = 'Please enter both username and password';
        header('Location: login.php');
        exit;
    }

    // Query database for user
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username, 'password' => sha1($password)]);

    // Check if username or email already exists in database
    $sql = "SELECT * FROM users WHERE username = :username OR email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username, 'email' => $email]);

    if (
        $stmt->rowCount() > 0
    ) {
        // Username or email already exists, set error message and redirect to register page
        $_SESSION['error'] = 'Username or email already taken';
        header('Location: register.php');
        exit;
    } else {
        // Username and email are unique, insert new user record into database
        $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'username' => $username,
            'password' => sha1($password),
            'email' => $email
        ]);

        header('Location: dashboard.php');

        // Close database connection
        $conn = null;
    }
}

?>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Sign In</a></li>
            </ul>
        </nav>
    </header>
    <div class="login-form">
        <h2>Registration Form</h2>
        <?php
        // Display error message if set
        if (isset($_SESSION['error'])) {
            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
        <form method="POST" autocomplete="off">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <input type="submit" value="REGISTER">
        </form>
    </div>
</body>

</html>