<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset1HasilSpModel extends Model
{
    protected $table            = 'pvd_riset1_hasilsp';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    public function getByJumlahAnggota($ja)
    {
        return $this->where(["b203" => $ja])->countAllResults();
    }
    public function getJenisKelamin($jk)
    {
        return $this->where(["b504"=>$jk])->countAllResults();
    }

    public function getMelakukanPerjalananWisata1($b524)
    {
        return $this->where(["b524" => $b524])->countAllResults();

    }
    public function getMelakukanPerjalananWisata2($b525)
    {
        return $this->where(["b525" => $b525])->countAllResults();

    }
    public function getMelakukanPerjalananWisata3($b526)
    {
        return $this->where(["b526" => $b526])->countAllResults();

    }
    public function getMelakukanPerjalananWisata4($b527)
    {
        return $this->where(["b527" => $b527])->countAllResults();

    }
    public function getMelakukanPerjalananWisata5($b528)
    {
        return $this->where(["b528" => $b528])->countAllResults();

    }
    public function getMelakukanPerjalananWisata6($b529)
    {
        return $this->where(["b529" => $b529])->countAllResults();

    }
}
