<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset1HasilPKLModel extends Model
{
    protected $table            = 'pvd_riset1_hasilpkl';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    

    public function getOutput6wisnus($output6)
    {
        return $this ->where(["Jumlah Perjalanan Wisata Asal Kota Malang Triwulan IV 2022" => $output6])->countAllResults();
    }
    public function getOutput7wisnus($output7)
    {
        return $this ->where(["Jumlah Wisatawan Nusantara Asal Kota Malang" => $output7])->countAllResults();
    }
}
