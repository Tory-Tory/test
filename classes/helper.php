<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/mysql.php';
class Helper
{
    public function pre($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}