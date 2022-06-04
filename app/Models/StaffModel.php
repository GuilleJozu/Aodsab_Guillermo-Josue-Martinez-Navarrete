<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'staffs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre','apellidos' ,'funcion' ,'descripcionFuncion','fechaIngreso' ,'salario' ,'activo' ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    

    public function getStaff($slug = false) {
        if ($slug === false) {
            return $this->orderBy('id', 'desc')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
