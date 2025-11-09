<?php
// app/controllers/PageController.php
class PageController
{
    protected $viewsPath;

    public function __construct()
    {
        $this->viewsPath = realpath(__DIR__ . '/../views');
    }

    public function render(string $page)
    {
        // sanitize page name
        $safe = preg_replace('/[^a-z0-9_\-]/i', '', $page);
        $view = $this->viewsPath . '/' . $safe . '.php';

        if (file_exists($view)) {
            include $this->viewsPath . '/header.php';
            include $view;
            include $this->viewsPath . '/footer.php';
        } else {
            header("HTTP/1.0 404 Not Found");
            include $this->viewsPath . '/header.php';
            echo '<main style="padding:2rem"><h1>404 - Page not found</h1><p>The page "' . htmlspecialchars($page) . '" does not exist.</p></main>';
            include $this->viewsPath . '/footer.php';
        }
    }
}
