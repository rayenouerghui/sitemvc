<?php
// Front controller (public/index.php)
require_once __DIR__ . '/../app/controllers/PageController.php';

$page = $_GET['page'] ?? 'home';
$controller = new PageController();
$controller->render($page);
