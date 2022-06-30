<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RqSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "rqd_id" => "4df84524",
                "rqd_rqhno" => "OR22001",
                "rqd_itmid" => "B001",
                "rqd_desc" => "Kertas A4",
                "rqd_unit" => "RIM",
                "rqd_orderqty" => 3.00,
                "rqd_receiptqty" => 0.00,
                "rqd_status" => "N"
            ],
            [
                "rqd_id" => "4dff8385",
                "rqd_rqhno" => "OR22001",
                "rqd_itmid" => "B002",
                "rqd_desc" => "Kertas A3",
                "rqd_unit" => "RIM",
                "rqd_orderqty" => 1.00,
                "rqd_receiptqty" => 0.00,
                "rqd_status" => "N"
            ],
            [
                "rqd_id" => "4e072c91",
                "rqd_rqhno" => "OR22001",
                "rqd_itmid" => "B003",
                "rqd_desc" => "Kertas A5",
                "rqd_unit" => "RIM",
                "rqd_orderqty" => 5.00,
                "rqd_receiptqty" => 0.00,
                "rqd_status" => "N"
            ]
        ];
        $this->db->table('tb_rqdtl')->insertBatch($data);
    }
}
