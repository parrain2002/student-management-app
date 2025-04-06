<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Connexion</title></head>
<body>
    <h2>Connexion</h2>
    <form method="post" action="process_login.php">
        <label>Nom d'utilisateur:</label><br>
        <input type="text" name="username" required><br>
        <label>Mot de passe:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
