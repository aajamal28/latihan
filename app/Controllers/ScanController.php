<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ScanModel;

class ScanController extends BaseController
{
    function __construct()
	{
		$this->scanModel = new ScanModel();
	}

    public function scanprocess()
    {
        $dataPost = $this->request->getPost();
        $limiter = ";";
        $limCount = substr_count($dataPost['label'], $limiter);
        if ($limCount == "7") {

            $extract = explode($limiter, $dataPost['label']);
            $saveData = [
                "sc_date" => date('Y-m-d'),
                "sc_time" => date('H:i:s'),
                "sc_type" => $dataPost['type'],
                "sc_warehouse" => $dataPost['wh'],
                "sc_label" => $dataPost['label'],
                "sc_part" => strtoupper($extract[0]),
                "sc_qty" => $extract[1],
                "sc_lot" => $extract[2],
                "sc_text1" => $extract[6],
                "sc_text2" => $extract[7]
            ];

            $save = $this->scanModel->insertScan($saveData);

            if ($save) {
                $response = [
                    'success' => true,
                    'msg' => 'data save!!!',
                ];
            } else {
                $response = [
                    'success' => false,
                    'msg' => 'error while saving data!!!',
                ];
            }
        } else {
            $response = [
                'success' => false,
                'msg' => 'format not supported!!!',
            ];
        }

        return $this->response->setJSON($response);
    }

    public function getDataScan($type,$warehouse)
	{
        $today = date('Y-m-d');
        $date = date('Y-m-d', strtotime('-1 days', strtotime($today)));
		$data = $this->scanModel->getData($type, $warehouse, $date);
		return $this->response->setJSON(["data" => $data]);
	}
}
