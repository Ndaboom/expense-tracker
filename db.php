<?php 

// Connect to database using PDO (replace with your own database credentials)
$servername = 'localhost';
$dbusername = 'your_db_username';
$dbpassword = 'your_db_password';
$dbname = 'your_db_name';
$dsn = "mysql:host=$servername;dbname=$dbname";
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];
try {
$conn = new PDO($dsn, $dbusername, $dbpassword, $options);
} catch (PDOException $e) {
die('Connection failed: ' . $e->getMessage());
}