<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

use App\Models\Pvd\Riset1HasilSpModel;
use App\Models\Pvd\Riset2HasilSpModel;
use App\Models\Pvd\Riset3HasilSpModel;

class Dasbor extends BaseController
{

    // RISET 1
    protected $jumlahanggota;

    // RISET 2
    protected $jeniskelamin;
    protected $jenispekerjaanutama;

    // RISET 3
    protected $jenisindustri;

    // Riset 4

    public function __construct()
    {
        // // RISET 1
        $this->jumlahanggota = new Riset1HasilSpModel();


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
                
                $judul = 'Dasbor Riset 1';

                $ja = [
                    "ja0" => $this->jumlahanggota->getByJumlahAnggota(0),
                    "ja1" => $this->jumlahanggota->getByJumlahAnggota(1),
                    "ja2" => $this->jumlahanggota->getByJumlahAnggota(2),
                    "ja3" => $this->jumlahanggota->getByJumlahAnggota(3),
                    "ja4" => $this->jumlahanggota->getByJumlahAnggota(4),
                    "ja5" => $this->jumlahanggota->getByJumlahAnggota(5),

                ];

                $data = [
                    'judul' => $judul,
                    'ja' => $ja
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
                
                $judul = 'Dasbor Riset 2';
                $data = [
                    'judul' => $judul,
                    'jk' => $jk,
                    'jpu' => $jpu
                ];
                break;

            case 'riset3':
                $judul = 'Dasbor Riset 3';
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
                $judul = 'Dasbor Riset 4';
                $data = [
                    'judul' => $judul,
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/index', $data);
    }
}
