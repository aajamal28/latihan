<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RequestDetailMigations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'rqd_id'          => [
                'type'           => 'CHAR',
                'constraint'     => '16',
            ],
            'rqd_rqhno'          => [
                'type'           => 'CHAR',
                'constraint'     => '7',
            ],
            'rqd_itmid'          => [
                'type'           => 'CHAR',
                'constraint'     => '15',
            ],
            'rqd_desc'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '35',
            ],
            'rqd_unit'          => [
                'type'           => 'CHAR',
                'constraint'     => '5',
            ],
            'rqd_orderqty'          => [
                'type'           => 'decimal',
                'constraint'     => '10,2',
            ],
            'rqd_receiptqty'          => [
                'type'           => 'decimal',
                'constraint'     => '10,2',
            ],
            'rqd_status'          => [
                'type'       => 'ENUM',
                'constraint' => ['C', 'N'],
                'default'    => 'N',
            ],
        ]);
        $this->forge->addKey('rqd_id', TRUE);
        $this->forge->createTable('tb_rqdtl', TRUE);
    }

    public function down()
    {
        //
    }
}
