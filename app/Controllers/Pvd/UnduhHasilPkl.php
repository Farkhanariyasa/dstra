<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

use App\Models\Pvd\UnduhHasilPklModel;
use App\Models\Pvd\Riset1HasilSpModel;
use App\Models\Pvd\Riset2HasilSpModel;
use App\Models\Pvd\Riset3HasilSpModel;
use App\Models\Pvd\Riset4HasilSpModel;

class UnduhHasilPkl extends BaseController
{
    protected $emailpengunduh;

    // RISET 1
    protected $jumlahanggota;
    protected $hasilsp2;

    // RISET 2
    protected $jeniskelamin;
    protected $jenispekerjaanutama;

    // RISET 3
    protected $jenisindustri;
    protected $pendidikantertinggi;
    protected $jeniskelamin_riset3;

    // RISET 4
    protected $unitusahaTIK;
    
    public function __construct()
    {
        // RISET 1
        $this->jumlahanggota = new Riset1HasilSpModel();
        $this->hasilsp2 = new Riset1HasilSpModel();

        // RISET 2
        $this->jeniskelamin = new Riset2HasilSpModel();
        $this->jenispekerjaanutama = new Riset2HasilSpModel();

        // RISET 3
        $this->jenisindustri = new Riset3HasilSpModel();
        $this->pendidikantertinggi = new Riset3HasilSpModel();
        $this->jeniskelamin_riset3 = new Riset3HasilSpModel();

        // RISET 4
        $this->unitusahaTIK = new Riset4HasilSpModel();
    }
    // public function __construct()
    // {
       
    //     $this->emailpengunduh = new EmailUnduhVisualisasiModel();
        
    // }
    public function unduh($riset)
    {
        $datapengunduh = new UnduhHasilPklModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $datapengunduh->insert($data);
        

        return redirect()->to('hasil-pkl/'. $riset .'/dasbor');
        
    }
}
