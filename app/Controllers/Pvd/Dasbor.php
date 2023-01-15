<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

use App\Models\Pvd\Riset2HasilSpModel;
use App\Models\Pvd\Riset3HasilSpModel;

class Dasbor extends BaseController
{

    // Riset 1

    // RISET 2
    protected $jeniskelamin;
    protected $jenispekerjaanutama;

    // RISET 3
    protected $jenisindustri;

    // Riset 4

    public function __construct()
    {
        // // RISET 1
        // $this->datariset1 = new Riset1Model();
        // $this->data_riset1_hasil1 = new Riset1Hasil1Model();
        // $this->data_riset1_hasil3 = new Riset1Hasil3Model();
        // $this->data_riset2_hasil1 = new Riset2Hasil1Model();

        // RISET 2
        $this->jeniskelamin = new Riset2HasilSpModel();
        $this->jenispekerjaanutama = new Riset2HasilSpModel();

        // RISET 3
        $this->jenisindustri = new Riset3HasilSpModel();
    }

    public function index($riset)
    {
        $judul = '';
        switch ($riset) {
            case 'riset1':
                
                $judul = 'Riset 1';
                $data = [
                    'judul' => $judul,
                ];
                break;

            case 'riset2':
                $jk = [
                    'jk1' => $this->jeniskelamin->getByJenisKelamin("1"),
                    'jk2' => $this->jeniskelamin->getByJenisKelamin("2")
                ];

                $jpu = [
                    'jpu0' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("0"),
                    'jpu1' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("1"),
                    'jpu2' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("2"),
                    'jpu3' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("3"),
                    'jpu4' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("4"),
                    'jpu5' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("5"),
                    'jpu6' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("6"),
                    'jpu7' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("7"),
                    'jpu8' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("8"),
                    'jpu9' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("9")
                ];
                
                $judul = 'Riset 2';
                $data = [
                    'judul' => $judul,
                    'jk' => $jk,
                    'jpu' => $jpu
                ];
                break;

            case 'riset3':
                $judul = 'Riset 3';
                $ji = [
                    'ji1'=> $this->jenisindustri->getByJenisIndustri("1"),
                    'ji2'=> $this->jenisindustri->getByJenisIndustri("2"),
                    'ji3'=> $this->jenisindustri->getByJenisIndustri("3"),
                    'ji4'=> $this->jenisindustri->getByJenisIndustri("4"),
                    'ji5'=> $this->jenisindustri->getByJenisIndustri("5"),
                    'ji6'=> $this->jenisindustri->getByJenisIndustri("6"),
                    'ji7'=> $this->jenisindustri->getByJenisIndustri("7"),
                    'ji8'=> $this->jenisindustri->getByJenisIndustri("8"),
                    'ji9'=> $this->jenisindustri->getByJenisIndustri("9"),
                    'ji10'=> $this->jenisindustri->getByJenisIndustri("10"),
                    'ji11'=> $this->jenisindustri->getByJenisIndustri("11")
                ];
                $data = [
                    'judul' => $judul,
                    'ji' =>$ji
                ];
                break;

            case 'riset4':
                $judul = 'Riset 4';
                $data = [
                    'judul' => $judul,
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/index', $data);
    }
}
