<?php
// Database credentials
$host = 'localhost';
$db   = 'users';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Set up the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name and email from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    
    // Execute the statement with the form data
    $stmt->execute([$name, $email]);

    // Display a confirmation message
    echo "<p>Thank you, your information has been successfully saved.</p>";
}
?>
