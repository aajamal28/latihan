<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUser extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'usrid' => [
				'type' => 'char',
				'constraint' => '10',
			],
			'username' => [
				'type' => 'varchar',
				'constraint' => '35',
			],
			'name' => [
				'type' => 'varchar',
				'constraint' => '50',
			],
			'role' => [
				'type' => 'enum',
				'constraint' => ['AD','OP'],
			],
			'password' => [
				'type' => 'varchar',
				'constraint' => '200',
			],
			'created_at' => [
				'type' => 'datetime'
			],
		]);

		$this->forge->addKey('usrid', TRUE);
		$this->forge->createTable('tb_user', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('tb_user');
	}
}
