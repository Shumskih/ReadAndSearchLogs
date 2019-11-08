<?php


interface LogFile
{
    public function parseLogs($searchString = NULL);

    public function getListOfAllLogs();

    public function setListOfCheckedLogs($listOfCheckedLogs);

    public function getListOfCheckedLogs($checkedLogs = NULL);
}