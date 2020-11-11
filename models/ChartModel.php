<?php

require_once('DbModel.php');

class ChartModel extends DbModel
{
    public function getChart()
    {

        $con = $this->connect();
        $data = array();
        $result = $con->query("SELECT status, COUNT(status) AS size_status FROM graph GROUP BY status");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row;
            }
            // foreach ($result as $row) {
            //     $data['label'][] = $row->status;
            //     $data['data'][] = (int) $row->size_status;
            // }
        }

        foreach ($data as $row) {
            echo '<pre>';
            print_r($row);
            echo '</pre>';
            $data['label'][] = $row['status'];
            $data['data'][] = (int) $row['size_status'];
        }
        return json_encode($data, JSON_UNESCAPED_UNICODE);
        // echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
}
