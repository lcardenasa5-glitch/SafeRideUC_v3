<?php
// Punto de entrada — enruta acciones MVC
require __DIR__ . '/app/controllers/AuthController.php';
require __DIR__ . '/app/controllers/RideController.php';

$action = $_GET['action'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'login')    AuthController::login();
    elseif ($action === 'register') AuthController::register();
    elseif ($action === 'create_ride') {
        session_start();
        if (empty($_SESSION['user'])) { header('Location: index.php'); exit; }
        RideController::create($_POST, $_SESSION['user']['id']);
        header('Location: dashboard.php');
        exit;
    }
} else {
    if ($action === 'register')   AuthController::showRegister();
    elseif ($action === 'logout') AuthController::logout();
    elseif ($action === 'api_rides') RideController::apiList();  // <-- AJAX
    else AuthController::showLogin();
}
