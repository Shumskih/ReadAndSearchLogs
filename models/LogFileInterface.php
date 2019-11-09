<?php


interface LogFileInterface
{
    function searchLogs($searchString = NULL);

    function getListOfAllLogs();

    function setListOfCheckedLogs($listOfCheckedLogs);

    function getListOfCheckedLogs($checkedLogs = NULL);
}