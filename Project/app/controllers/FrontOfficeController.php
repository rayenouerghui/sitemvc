<?php
// app/controllers/FrontOfficeController.php
require_once __DIR__ . '/PageController.php';

class FrontOfficeController extends PageController
{
    // Renders views preferring app/views/frontoffice/<page>.php
    public function render(string $page)
    {
        $safe = preg_replace('/[^a-z0-9_\-]/i', '', $page);
        $frontView = realpath(__DIR__ . '/../views') . '/frontoffice/' . $safe . '.php';
        $fallbackView = realpath(__DIR__ . '/../views') . '/' . $safe . '.php';

        if (file_exists($frontView)) {
            include realpath(__DIR__ . '/../views') . '/header.php';
            include $frontView;
            include realpath(__DIR__ . '/../views') . '/footer.php';
            return;
        }

        // fallback to shared view if exists
        if (file_exists($fallbackView)) {
            include realpath(__DIR__ . '/../views') . '/header.php';
            include $fallbackView;
            include realpath(__DIR__ . '/../views') . '/footer.php';
            return;
        }

        header("HTTP/1.0 404 Not Found");
        include realpath(__DIR__ . '/../views') . '/header.php';
        echo '<main style="padding:2rem"><h1>404 - Page not found (front)</h1></main>';
        include realpath(__DIR__ . '/../views') . '/footer.php';
    }
}
