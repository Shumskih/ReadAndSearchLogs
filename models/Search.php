<?php


abstract class Search
{
    public static abstract function parseSingle($searchString, $listOfLogs);

    public static abstract function parseDouble($searchString, $listOfLogs);

    public static abstract function parseAll($listOfLogs);

    public static function notFound()
    {
        return 'Nothing Found!';
    }
}