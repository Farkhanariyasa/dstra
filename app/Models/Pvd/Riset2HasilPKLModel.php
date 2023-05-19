<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset2HasilPKLModel extends Model
{
    protected $table            = 'pvd_riset2_hasilpkl';
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
    public function getByPendidikanTertinggi($pt)
    {
        return $this->where(['b508' => $pt, 'kat' => 'WK'])->countAllResults();
    }
    public function getByTujuanUtama($tu)
    {
        return $this->where(['b702' => $tu, 'kat' => 'WK'])->countAllResults();
    }
}
