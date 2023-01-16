<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset2HasilSpModel extends Model
{
    protected $table            = 'pvd_riset2_hasilsp';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    public function getByJenisKelamin($jk)
    {
        return $this->where(['b504' => $jk, 'kat' => 'WK'])->countAllResults();
    }

    public function getByJenisPekerjaanUtama($jpu)
    {
        return $this->where(['b511' => $jpu, 'kat' => 'WK'])->countAllResults();
    }
}
