<?php


class ErrorPageController
{
    public function error404() {
        $title = 'Page Not Found';

        include ROOT . '/views/errors/404.html.php';
    }
}