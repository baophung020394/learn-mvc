<?php
class DbModel
{
    public function connect()
    {
        $con = mysqli_connect('localhost', 'root', '', 'learn_mvc');
        mysqli_set_charset($con, 'utf8');
        if (mysqli_connect_errno()) {
            echo 'Connect error: ' . mysqli_connect_error();
        }

        return $con;
    }
}
