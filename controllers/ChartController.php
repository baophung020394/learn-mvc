<?php
class ChartController
{
    public function getChart() {
        
        require_once('models/ChartModel.php');
        $chartModel = new ChartModel();
        $data = $chartModel -> getChart();
        // print_r($data);
        require_once('views/ChartView.php');
        $chartView = new ChartView();
        $chartView->showChart($data);
    }
}

