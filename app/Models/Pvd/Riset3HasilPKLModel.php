<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset3HasilPklModel extends Model
{
    protected $table = 'pvd_riset3_hasilpkl';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function getByJenisIndustri1($ji, $sr,)
    {
        return $this->where(['b503' => $ji, 'b301' => $sr])->countAllResults();
    }


    public function getByJenisIndustri($ji)
    {
        return $this->where(['b503' => $ji])->countAllResults();
    }

    public function getByStatusRumah($sr)
    {
        return $this->where(['b301' => $sr])->countAllResults();
    }

    public function getByRL_JK($rumahlain, $jeniskelamin)
    {
        return $this->where(['b303' => $rumahlain, 'b404' => $jeniskelamin])->countAllResults();
    }


    // Tujuan 2 
    public function get_2_1($ji, $sr,)
    {
        return $this->where(['b503' => $ji, 'b301' => $sr])->countAllResults();
    }

    public function get_2_2($b503, $b512)
    {
        return $this->where(['b503' => $b503, 'b512' => $b512])->countAllResults();
    }
}
