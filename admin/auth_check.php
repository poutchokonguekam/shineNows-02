<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['admin_id']) || empty($_SESSION['admin_role'])) {
    header('Location: login.php');
    exit;
}
