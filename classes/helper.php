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

    public function isAutorize($data){
        if(!empty($data)){

            if ($user){
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }
}