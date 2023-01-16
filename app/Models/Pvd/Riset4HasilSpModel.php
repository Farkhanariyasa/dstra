<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset4HasilSpModel extends Model
{
    protected $table = 'pvd_riset4_hasilsp';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function getUnitUsahaTIK($uu){
        return $this->where(["b409a" => $uu])->countAllResults();
    }

}
