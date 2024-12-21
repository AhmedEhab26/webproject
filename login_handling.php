<?php
session_start();

// Database connection settings
$host = 'localhost';
$dbname = 'users';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handling login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['Email'] ?? '');
    $pass = trim($_POST['password'] ?? '');

    if (empty($user) || empty($pass)) {
        echo json_encode(["success" => false, "message" => "Email and password are required."]);
        exit;
    }

    $stmt = $pdo->prepare('SELECT id, Email, password FROM users WHERE Email = :Email');
    $stmt->execute(['Email' => $user]);
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($userData && password_verify($pass, $userData['password'])) {
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['Email'] = $userData['Email'];
        echo json_encode(["success" => true, "message" => "Login successful."]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid Email or password."]);
    }
    exit;
}
?>
