<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset3HasilSPModel extends Model
{
    protected $table = 'pvd_riset3_hasilsp';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function getByJenisIndustri($ji){
        return $this->where(['b503' => $ji])->countAllResults();
    }

    public function getByPendidikanTertinggi($pt){
        return $this->where(['b705' => $pt])->countAllResults();
    }
    public function getByJenisKelamin_Riset3($jk_1){
        return $this->where(['b4_4' => $jk_1])-> countAllResults();
    }

    public function getPendapatan_Riset3(){
        // get all row in column b506
        $pd_1 = $this->select("b506")->findAll();
        $pd_1 = array_column($pd_1, "b506");
        return $pd_1;
    }
  
}