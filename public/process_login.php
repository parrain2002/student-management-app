<?php
session_start();
require_once '../configuration/db.php'; // Fichier avec la connexion PDO

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $_POST['username']]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role']
        ];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Identifiants invalides.";
    }
} else {
    echo "Remplis tous les champs.";
}
?>
