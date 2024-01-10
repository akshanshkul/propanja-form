<?php


namespace App\form;


/**
 * Summary of Database
 */
class Database
{
    /**
     * Summary of db
     * @return \mysqli|bool
     */
    public static function db()
    {
        // $link = mysqli_connect('127.0.0.1', 'u424442379_pro_panja_form', 'u$a0o:Y4x', 'u424442379_pro_panja_form');

        $link = mysqli_connect('127.0.0.1', 'root', '', 'ppl_payment_form');
        return $link;
    }
}





