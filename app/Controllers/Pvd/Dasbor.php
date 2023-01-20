<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

use App\Models\Pvd\Riset1HasilSpModel;
use App\Models\Pvd\Riset1HasilSp2Model;
use App\Models\Pvd\Riset2HasilSpModel;
use App\Models\Pvd\Riset3HasilSpModel;
use App\Models\Pvd\Riset4HasilSpModel;


class Dasbor extends BaseController
{

    // RISET 1
    protected $jumlahanggota;
    protected $hasilsp2;
    protected $simcard;

    // RISET 2
    protected $jeniskelamin;
    protected $jenispekerjaanutama;
    protected $pendidikantertinggi_riset2;

    // RISET 3
    protected $jenisindustri;
    protected $pendidikantertinggi;
    protected $jeniskelamin_riset3;

    // RISET 4
    protected $unitusahaTIK;
    protected $pendapatan;
    protected $umur;
    protected $pendapatanNoFilter;

    public function __construct()
    {
        // RISET 1
        $this->jumlahanggota = new Riset1HasilSpModel();
        $this->hasilsp2 = new Riset1HasilSpModel();
        $this->simcard = new Riset1HasilSpModel();

        // RISET 2
        $this->jeniskelamin = new Riset2HasilSpModel();
        $this->jenispekerjaanutama = new Riset2HasilSpModel();
        $this->pendidikantertinggi_riset2 = new Riset2HasilSpModel();

        // RISET 3
        $this->jenisindustri = new Riset3HasilSpModel();
        $this->pendidikantertinggi = new Riset3HasilSpModel();
        $this->jeniskelamin_riset3 = new Riset3HasilSpModel();

        // RISET 4
        $this->unitusahaTIK = new Riset4HasilSpModel();
        $this->pendapatan = new Riset4HasilSpModel();
        $this->umur = new Riset4HasilSpModel();
        $this->pendapatanNoFilter = new Riset4HasilSpModel();
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

                $jk = [
                    "laki" => $this->hasilsp2->getJenisKelamin(1),
                    "perempuan" => $this->hasilsp2->getJenisKelamin(2)
                ];


                $b524 = [
                    "ya" => $this->hasilsp2->getMelakukanPerjalananWisata1(1),
                    "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata1(2),
                ];

                $b525 = [
                    "ya" => $this->hasilsp2->getMelakukanPerjalananWisata2(1),
                    "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata2(2),
                ];

                $b526 = [
                    "ya" => $this->hasilsp2->getMelakukanPerjalananWisata3(1),
                    "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata3(2),
                ];

                $b527 = [
                    "ya" => $this->hasilsp2->getMelakukanPerjalananWisata4(1),
                    "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata4(2),
                ];

                $b528 = [
                    "ya" => $this->hasilsp2->getMelakukanPerjalananWisata5(1),
                    "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata5(2),
                ];

                $b529 = [
                    "ya" => $this->hasilsp2->getMelakukanPerjalananWisata6(1),
                    "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata6(2),
                ];

                $indosat = [
                    "ya"=>$this->simcard->getindosat(1)
                ];
                $xl = [
                    "ya"=>$this->simcard->getxlaxiata(1)
                ];
                $tri = [
                    "ya"=>$this->simcard->get3(1)
                ];
                $smartfren = [
                    "ya"=>$this->simcard->getsmartfren(1),
                ];
                $lainnya = [
                    "ya"=>$this->simcard->getlainnya(1),
                ];
                
                
                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                    'ja' => $ja,
                    'jk' => $jk,
                    'b524' => $b524,
                    'b525' => $b525,
                    'b526' => $b526,
                    'b527' => $b527,
                    'b528' => $b528,
                    'b529' => $b529,
                    'indosat'=> $indosat,
                    'xl'=>$xl,
                    'tri'=>$tri,
                    'smartfren'=>$smartfren,
                    'lainnya'=>$lainnya
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

                $pt_2 = [
                    'pt_21' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("1"),
                    'pt_22' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("2"),
                    'pt_23' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("3"),
                    'pt_24' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("4"),
                    'pt_25' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("5"),
                    'pt_26' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("6"),
                    'pt_27' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("7"),
                ];

                $menu = getMenu();

                $judul = 'Dasbor Riset 2';
                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                    'jk' => $jk,
                    'jpu' => $jpu,
                    'pt_2' => $pt_2
                ];
                break;

            case 'riset3':
                $judul = 'Dasbor Riset 3';
                // jenis usaha
                $ji = [
                    'ji1' => $this->jenisindustri->getByJenisIndustri("1"),
                    'ji2' => $this->jenisindustri->getByJenisIndustri("2"),
                    'ji3' => $this->jenisindustri->getByJenisIndustri("3"),
                    'ji4' => $this->jenisindustri->getByJenisIndustri("4"),
                    'ji5' => $this->jenisindustri->getByJenisIndustri("5"),
                    'ji6' => $this->jenisindustri->getByJenisIndustri("6"),
                    'ji7' => $this->jenisindustri->getByJenisIndustri("7"),
                    'ji8' => $this->jenisindustri->getByJenisIndustri("8"),
                    'ji9' => $this->jenisindustri->getByJenisIndustri("9"),
                    'ji10' => $this->jenisindustri->getByJenisIndustri("10"),
                    'ji11' => $this->jenisindustri->getByJenisIndustri("11")
                ];

                // pendidikan tertinggi
                $pt = [
                    'pt1' => $this->pendidikantertinggi->getByPendidikanTertinggi("1"),
                    'pt2' => $this->pendidikantertinggi->getByPendidikanTertinggi("2"),
                    'pt3' => $this->pendidikantertinggi->getByPendidikanTertinggi("3"),
                    'pt4' => $this->pendidikantertinggi->getByPendidikanTertinggi("4"),
                    'pt5' => $this->pendidikantertinggi->getByPendidikanTertinggi("5"),
                    'pt6' => $this->pendidikantertinggi->getByPendidikanTertinggi("6"),
                    'pt7' => $this->pendidikantertinggi->getByPendidikanTertinggi("7"),
                    'pt8' => $this->pendidikantertinggi->getByPendidikanTertinggi("8"),
                    'pt9' => $this->pendidikantertinggi->getByPendidikanTertinggi("9"),

                ];

                // status pekerja
                $jk_1 = [
                    'jk_11' => $this->jeniskelamin_riset3->getByJenisKelamin_Riset3("1"),
                    'jk_12' => $this->jeniskelamin_riset3->getByJenisKelamin_Riset3("2")
                ];

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                    'ji' => $ji,
                    'pt' => $pt,
                    'jk_1' => $jk_1
                ];
                break;

            case 'riset4':
                $judul = 'Dasbor Riset 4';

                $uu = [
                    'uu1' => $this->unitusahaTIK->getUnitUsahaTIK(1),
                    'uu2' => $this->unitusahaTIK->getUnitUsahaTIK(2),
                    'uu3' => $this->unitusahaTIK->getUnitUsahaTIK(3),
                    'uu4' => $this->unitusahaTIK->getUnitUsahaTIK(4),
                ];

                $b401a = [
                    'tidak' => $this->unitusahaTIK->getUnitUsahaTIK1(1),
                    'ya' => $this->unitusahaTIK->getUnitUsahaTIK1(2),
                ];

                $b407a = [
                    'b407a1' => $this->unitusahaTIK->getUnitUsahaTIK2(1),
                    'b407a2' => $this->unitusahaTIK->getUnitUsahaTIK2(2),
                    'b407a3' => $this->unitusahaTIK->getUnitUsahaTIK2(3),
                    'b407a4' => $this->unitusahaTIK->getUnitUsahaTIK2(4),
                ];

                $pd = $this->pendapatan->getPendapatan();

                $umur = $this->umur->getUmur();
                $pdnf = $this->pendapatanNoFilter->getPendapatanNoFilter();

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                    'uu' => $uu,
                    'pd' => $pd,
                    'b401a' => $b401a,
                    'b407a' => $b407a,
                    'umur' => $umur,
                    'pdnf' => $pdnf
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/index', $data);
    }
}
