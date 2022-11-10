<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class GenerateShortUrlModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'short_urls';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

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


    protected $db;

    public function getAll()
    {
        return $this->findAll();
    }

    public function getByCode($code)
    {
        return $this->where('short_code', $code)->first();
    }


    function add($data)
    {
        return $this->db
            ->table($this->table)
            ->insert($data);
    }

    function updateData($short_code, $data)
    {
        return $this->db
            ->table($this->table)
            ->where(["short_code" => $short_code])
            ->set($data)
            ->update();
    }

    function updateDataById($id, $data)
    {
        return $this->db
            ->table($this->table)
            ->where(["id" => $id])
            ->set($data)
            ->update();
    }
}
