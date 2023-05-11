<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset3HasilSpModel;
use App\Models\Pvd\Riset3HasilPKLModel;

class Riset3 extends BaseController
{
    protected $jenisindustri;
    protected $pendidikantertinggi;
    protected $jeniskelamin_riset3;
    protected $pendapatan_riset3;

    protected $jenisindustri1;
    protected $statusrumah1;
    protected $tujuan1_5;

    public function __construct()
    {
        $this->jenisindustri = new Riset3HasilSpModel();
        $this->pendidikantertinggi = new Riset3HasilSpModel();
        $this->jeniskelamin_riset3 = new Riset3HasilSpModel();
        $this->pendapatan_riset3 = new Riset3HasilSpModel();

        $this->jenisindustri1 = new Riset3HasilPKLModel();
        $this->statusrumah1 = new Riset3HasilPKLModel();
        $this->tujuan1_5 = new Riset3HasilPKLModel();
    }
    public function index()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/index', $data);
    }
    public function tempviz()
    {
        // jenis usaha
        $ji = [
            'ji1' => $this->jenisindustri->getByJenisIndustri("1"),
            'ji2' => $this->jenisindustri->getByJenisIndustri("2"),
            //'ji3' => $this->jenisindustri->getByJenisIndustri("3"),
            'ji4' => $this->jenisindustri->getByJenisIndustri("4"),
            //'ji5' => $this->jenisindustri->getByJenisIndustri("5"),
            //'ji6' => $this->jenisindustri->getByJenisIndustri("6"),
            //'ji7' => $this->jenisindustri->getByJenisIndustri("7"),
            //'ji8' => $this->jenisindustri->getByJenisIndustri("8"),
            'ji9' => $this->jenisindustri->getByJenisIndustri("9"),
            'ji10' => $this->jenisindustri->getByJenisIndustri("10"),
            'ji11' => $this->jenisindustri->getByJenisIndustri("11", "3", "5", "6", "7", "8")
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
        $pd_1 = $this->pendapatan_riset3->getPendapatan_Riset3();
        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 3',
            'menu' => $menu['riset3'],
            'ji' => $ji,
            'pt' => $pt,
            'jk_1' => $jk_1,
            'pd_1' => $pd_1
        ];
        return view('pvd/pages/dasbor/riset3/tempviz', $data);
    }

    public function tujuan1()
    {
    }

    // menu Hasil Kajian
    public function hasilkajian1()
    {
        // jenis usaha
        $ji = [
            'ji1' => $this->jenisindustri->getByJenisIndustri("1"),
            'ji2' => $this->jenisindustri->getByJenisIndustri("2"),
            //'ji3' => $this->jenisindustri->getByJenisIndustri("3"),
            'ji4' => $this->jenisindustri->getByJenisIndustri("4"),
            //'ji5' => $this->jenisindustri->getByJenisIndustri("5"),
            //'ji6' => $this->jenisindustri->getByJenisIndustri("6"),
            //'ji7' => $this->jenisindustri->getByJenisIndustri("7"),
            //'ji8' => $this->jenisindustri->getByJenisIndustri("8"),
            'ji9' => $this->jenisindustri->getByJenisIndustri("9"),
            'ji10' => $this->jenisindustri->getByJenisIndustri("10"),
            'ji11' => $this->jenisindustri->getByJenisIndustri("11", "3", "5", "6", "7", "8")
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
        $pd_1 = $this->pendapatan_riset3->getPendapatan_Riset3();
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 1 Riset 3',
            'menu' => $menu['riset3'],
            'ji' => $ji,
            'pt' => $pt,
            'jk_1' => $jk_1,
            'pd_1' => $pd_1
        ];

        // jenis usaha
        $jenisindustri_1 = [
            'ji1_1' => $this->jenisindustri1->getByJenisIndustri1("1", "1"),
            'ji2_1' => $this->jenisindustri1->getByJenisIndustri1("2", "1"),
            'ji3_1' => $this->jenisindustri1->getByJenisIndustri1("3", "1"),
            'ji4_1' => $this->jenisindustri1->getByJenisIndustri1("4", "1"),
            'ji5_1' => $this->jenisindustri1->getByJenisIndustri1("5", "1"),
            'ji6_1' => $this->jenisindustri1->getByJenisIndustri1("6", "1"),

            'ji1_2' => $this->jenisindustri1->getByJenisIndustri1("1", "2"),
            'ji2_2' => $this->jenisindustri1->getByJenisIndustri1("2", "2"),
            'ji3_2' => $this->jenisindustri1->getByJenisIndustri1("3", "2"),
            'ji4_2' => $this->jenisindustri1->getByJenisIndustri1("4", "2"),
            'ji5_2' => $this->jenisindustri1->getByJenisIndustri1("5", "2"),
            'ji6_2' => $this->jenisindustri1->getByJenisIndustri1("6", "2"),

            'ji1_3' => $this->jenisindustri1->getByJenisIndustri1("1", "3"),
            'ji2_3' => $this->jenisindustri1->getByJenisIndustri1("2", "3"),
            'ji3_3' => $this->jenisindustri1->getByJenisIndustri1("3", "3"),
            'ji4_3' => $this->jenisindustri1->getByJenisIndustri1("4", "3"),
            'ji5_3' => $this->jenisindustri1->getByJenisIndustri1("5", "3"),
            'ji6_3' => $this->jenisindustri1->getByJenisIndustri1("6", "3"),
        ];

        $statusrumah_1 = [
            'sr1' => $this->statusrumah1->getByStatusRumah("1"),
            'sr2' => $this->statusrumah1->getByStatusRumah("2"),
            'sr3' => $this->statusrumah1->getByStatusRumah("3")
        ];

        $data_1_5 = [
            'rl_jk_1_1' => $this->tujuan1_5->getByRL_JK("1", "1"),
            'rl_jk_1_2' => $this->tujuan1_5->getByRL_JK("1", "2"),
            'rl_jk_2_1' => $this->tujuan1_5->getByRL_JK("2", "1"),
            'rl_jk_2_2' => $this->tujuan1_5->getByRL_JK("2", "2")
        ];

        $data1 = [
            'judul' => 'Hasil Kajian Tujuan 1 Riset 3',
            'menu' => $menu['riset3'],
            'ji' => $jenisindustri_1,
            'pt' => $pt,
            'jk_1' => $jk_1,
            'pd_1' => $pd_1,
            'ji1' => $jenisindustri_1,
            'data_1_5' => $data_1_5,
            'sr1' => $statusrumah_1
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan1', $data1);
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan1', $data);
    }

    public function hasilkajian2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 2 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan2', $data);
    }
    public function hasilkajian3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 3 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan3', $data);
    }

    public function hasilkajian4()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian 4 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan4', $data);
    }

    // menu Dokumen
    public function kuesioner()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kuesioner Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/dokumen/kuesioner', $data);
    }

    public function bukupedoman()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Buku Pedoman Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/dokumen/bukupedoman', $data);
    }
}
