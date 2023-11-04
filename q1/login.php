<?php
// Include database connection file here
session_start();

require_once 'db.php';

$message = ''; // Initialize a variable to hold the message
$login_successful = false; // Flag to check if login is successful

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check user email and password
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Set flag to true as login is successful
        $login_successful = true;

        // Redirect to dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        $message = "Login failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .message {
            background-color: #ffdddd;
            color: #d9534f;
            border: 1px solid #d9534f;
            border-radius: 5px;
            padding: 10px;
            margin: 20px auto;
            width: 90%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <?php if (!$login_successful && $message): ?>
        <div class="message">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>
</body>
</html>
