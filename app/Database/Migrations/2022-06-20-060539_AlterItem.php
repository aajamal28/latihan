<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterItem extends Migration
{
    public function up()
    {
        $this->forge->addColumn('tb_item', [
			'itm_unit CHAR(5)'
		]);
    }

    public function down()
    {
        $this->forge->dropColumn('tb_item', 'itm_unit');
    }
}
