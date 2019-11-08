<?php
include_once ROOT . '/controllers/IndexPageController.php';
include_once ROOT . '/controllers/ErrorPageController.php';

class Route
{

    public function run()
    {
        if (URI === '/' || isset($_SERVER['QUERY_STRING']) && URI === '/?' . $_SERVER['QUERY_STRING']) {
            $controller = new IndexPageController();
            $controller->index();
        } else {
            $controller = new ErrorPageController();
            $controller->error404();
        }
    }
}