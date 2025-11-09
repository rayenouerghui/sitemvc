<?php
// app/controllers/BackOfficeController.php
class BackOfficeController
{
    protected $viewsPath;

    public function __construct()
    {
        $this->viewsPath = realpath(__DIR__ . '/../views');
    }

    public function render(string $page)
    {
        $safe = preg_replace('/[^a-z0-9_\-]/i', '', $page);
        $backView = $this->viewsPath . '/backoffice/' . $safe . '.php';
        $fallbackView = $this->viewsPath . '/admin.php';

        if (file_exists($backView)) {
            include $this->viewsPath . '/header.php';
            include $backView;
            include $this->viewsPath . '/footer.php';
            return;
        }

        if (file_exists($fallbackView)) {
            include $this->viewsPath . '/header.php';
            include $fallbackView;
            include $this->viewsPath . '/footer.php';
            return;
        }

        header("HTTP/1.0 404 Not Found");
        include $this->viewsPath . '/header.php';
        echo '<main style="padding:2rem"><h1>404 - Admin page not found</h1></main>';
        include $this->viewsPath . '/footer.php';
    }
}
