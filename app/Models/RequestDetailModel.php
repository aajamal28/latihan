<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestDetailModel extends Model
{
    protected $table                = 'tb_rqdtl';
	protected $primaryKey           = ['rqd_id'];
	protected $returnType           = 'array';
	protected $allowedFields        = [
		'rqd_rqhno',
        'rqd_itmid',
        'rqd_desc',
        'rqd_unit',
        'rqd_orderqty',
        'rqd_receiptqty',
        'rqd_status'
	];

	public function insertRequest($data)
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

	public function getData($id)
	{	
		return $this->table($this->table)
			->where('rqd_rqhno', $id)
			->get()
			->getResultArray();
	}
}
