<?php
require_once ROOT . '/models/LogFileNginx.php';

class IndexPageController
{
    private $logFile = NULL;

    public function __construct()
    {
        $this->logFile = new LogFileNginx();
    }

    public function index()
    {
        $title = 'Main Page';
        if (isset($_GET['logs'])) {
            $this->logFile->setListOfCheckedLogs($_GET['logs']);
        }
        if (isset($_GET['searchString'])) {
            $_GET['searchString'] = trim($_GET['searchString']);

            if ($_GET['searchString'] != NULL) {
                $this->logFile->parseLogs($_GET['searchString']);
            }
        }
        if (!isset($_GET['searchString']) || isset($_GET['searchString']) && $_GET['searchString'] == NULL) {
            $this->logFile->parseLogs();
        }
        $listOfAllLogs = $this->logFile->getLogFileNames();

        include ROOT . '/views/index.html.php';
    }
}