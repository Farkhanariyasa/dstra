<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset3HasilPKLModel extends Model
{
    protected $table = 'pvd_data_hasil_pkl_riset_3';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    public function getByJenisIndustri1($ji, $sr)
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
}
