<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableScan extends Migration
{
    public function up()
    {
        //create table scan
        $this->forge->addField([
			'sc_id'          => [
				'type'           => 'INT',
				'constraint'     => 7,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'sc_date'       => [
				'type'           => 'date',
			],
			'sc_time'      => [
				'type'           => 'time',
			],
            'sc_type'       => [
                'type'       => 'ENUM',
                'constraint' => ['IN', 'OUT'],
                'default'    => 'OUT',
            ],
			'sc_warehouse' => [
				'type'           => 'CHAR',
				'constraint'     => '6'
			],
			'sc_label' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'sc_part' => [
				'type'           => 'CHAR',
				'constraint'     => '35'
			],
			'sc_qty' => [
				'type'			=> 'DECIMAL',
				'constraint'	=> '10,2'
			],
			'sc_lot' => [
				'type'           => 'VARCHAR',
				'constraint'     => '30'
			],
			'sc_text1' => [
				'type'           => 'VARCHAR',
				'constraint'     => '30'
			],
			'sc_text2' => [
				'type'           => 'VARCHAR',
				'constraint'     => '30'
			],
        ]);

        $this->forge->addKey('sc_id', TRUE);
		$this->forge->createTable('tb_scan', TRUE);
    }

    public function down()
    {
        //
    }
}
