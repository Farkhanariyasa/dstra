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

  
}