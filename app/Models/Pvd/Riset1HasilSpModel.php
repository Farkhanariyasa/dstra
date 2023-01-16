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
}
