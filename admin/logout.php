<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

unset($_SESSION['admin_id'], $_SESSION['admin_username'], $_SESSION['admin_role']);
session_destroy();

header('Location: login.php');
exit;
