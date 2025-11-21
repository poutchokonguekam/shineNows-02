<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/db_connect.php';

if (!empty($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username !== '' && $password !== '') {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username LIMIT 1');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_username'] = $user['username'];
            $_SESSION['admin_role'] = $user['role'];
            header('Location: index.php');
            exit;
        }
    }

    $error = 'Identifiants invalides.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connexion admin</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <style>
        body {
            background: #0f0f0f;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            background: #1b1b1b;
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 360px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }
        .login-card h1 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .login-card input {
            padding: 0.75rem;
            border: 1px solid #333;
            background: #111;
            color: #fff;
            border-radius: 4px;
        }
        .login-card button {
            padding: 0.75rem;
            border: none;
            background: #d4af37;
            color: #111;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }
        .error {
            color: #ff6b6b;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <main class="login-card">
        <h1>Connexion admin</h1>
        <?php if ($error) : ?>
            <p class="error"><?= htmlspecialchars($error, ENT_QUOTES) ?></p>
        <?php endif; ?>
        <form method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Connexion</button>
        </form>
    </main>
</body>
</html>
