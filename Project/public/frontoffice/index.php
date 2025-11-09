<?php
// public/frontoffice/index.php
require_once __DIR__ . '/../../app/controllers/FrontOfficeController.php';

$page = $_GET['page'] ?? 'home';
$controller = new FrontOfficeController();
$controller->render($page);
