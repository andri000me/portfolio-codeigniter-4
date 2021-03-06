<?php

namespace App\Models;

use CodeIgniter\Model;

class FooterModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'footers';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'title','description','address','phone','email','copyright','is_active'
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getAllData()
	{
		return $this->get()->getResult();
	}

	public function getFirstData($id)
	{
		return $this->getWhere(['id' => $id])->getRow();
	}

	public function insertData($data)
	{
		return $this->insert($data);
	}

	public function updateData($data,$id)
	{
		return $this->where('id',$id)->set($data)->update();
	}

	public function deleteData($id)
	{
		return $this->where('id',$id)->delete();
	}
}
