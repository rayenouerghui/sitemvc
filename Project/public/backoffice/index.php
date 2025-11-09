<?php
// public/backoffice/index.php
require_once __DIR__ . '/../../app/controllers/BackOfficeController.php';

$page = $_GET['page'] ?? 'admin';
$controller = new BackOfficeController();
$controller->render($page);
