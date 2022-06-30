<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableItem extends Migration
{
    public function up()
    {
        //create table item
        $this->forge->addField([
            'itm_id'          => [
                'type'           => 'CHAR',
                'constraint'     => '30'
            ],
            'itm_part' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ],
            'itm_dsca' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ],
            'itm_dscb' => [
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ],
            'itm_snp' => [
                'type'            => 'DECIMAL',
                'constraint'    => '10,2'
            ],
            'itm_bpid' => [
                'type'           => 'CHAR',
                'constraint'     => '12'
            ],
        ]);

        $this->forge->addKey('itm_id', TRUE);
        $this->forge->createTable('tb_item', TRUE);
    }

    public function down()
    {
        //
    }
}
