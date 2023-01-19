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

    public function getPendapatan(){
        // get all row in column b309
        $pendapatan = $this->select('b309')->findAll();
        $pendapatan = array_column($pendapatan, 'b309');

        return $pendapatan;

    }

}
