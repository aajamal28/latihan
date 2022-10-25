<?php

namespace App\Models;

use CodeIgniter\Model;

class ScanModel extends Model
{
	protected $table                = 'tb_scan';
	protected $primaryKey           = ['sc_id'];
	protected $returnType           = 'array';
	protected $allowedFields        = [
		'sc_date',
		'sc_time',
		'sc_type',
		'sc_warehouse',
		'sc_label',
		'sc_part',
		'sc_qty',
		'sc_lot',
		'sc_text1',
		'sc_text2'
	];

	public function insertScan($data)
	{
		return $this->table($this->table)->insert($data);
	}

	public function checkexist($label)
	{
		return $this->table($this->table)
			->where('label', $label)
			->get()
			->getNumRows();
	}

	public function getData($type, $warehouse, $date)
	{	
		$sql = $this->db->query("SELECT * FROM summary_scan WHERE sc_type = '$type' AND sc_warehouse = '$warehouse' AND sc_date >= '$date'");
		return $sql->getResultObject();
	}
}
