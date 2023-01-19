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

    public function getUnitUsahaTIK1($b401a){
        return $this->where(["b401a" => $b401a])->countAllResults();
    }

    public function getUnitUsahaTIK2($b407a){
        return $this->where(["b407a" => $b407a])->countAllResults();
    }

    public function getPendapatan(){
        // get all row in column b309
        $pendapatan = $this->select('b309')->findAll();

        // delete row with value 0 
        foreach ($pendapatan as $key => $value) {
            if ($value['b309'] == 70000000 || $value['b309'] == 0) {
                unset($pendapatan[$key]);
            }
        }


        $pendapatan = array_column($pendapatan, 'b309');

    

        return $pendapatan;

    }

}
