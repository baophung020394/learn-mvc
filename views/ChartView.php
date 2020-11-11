<?php
class ChartView
{
    public function showChart($data)
    {
        // header('Content-Type: application/json');
        // print_r($data);
        // echo $data;
        require_once('templates/charts.php');
    }
}
