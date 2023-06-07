<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset3HasilSpModel;
use App\Models\Pvd\Riset3HasilPKLModel;
use App\Models\Pvd\UnduhHasilPklModel;

class Riset3 extends BaseController
{
    protected $jenisindustri;
    protected $pendidikantertinggi;
    protected $jeniskelamin_riset3;
    protected $pendapatan_riset3;

    protected $HasilPKL;
    protected $statusrumah1;
    protected $tujuan1_5;

    public function __construct()
    {
        $this->jenisindustri = new Riset3HasilSpModel();
        $this->pendidikantertinggi = new Riset3HasilSpModel();
        $this->jeniskelamin_riset3 = new Riset3HasilSpModel();
        $this->pendapatan_riset3 = new Riset3HasilSpModel();

        $this->HasilPKL = new Riset3HasilPKLModel();
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
        $menu = getMenu();
        $data1 = [
            'judul' => 'Hasil Kajian Tujuan 1 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan1', $data1);
    }

    public function hasilkajian2()
    {
        $menu = getMenu();
        $data_2_1 = [];

        $data_2_2 = [
            't2_1_1' => $this->HasilPKL->get_2_2("1", "1") + $this->HasilPKL->get_2_2("1.0", "1"),
            't2_2_1' => $this->HasilPKL->get_2_2("2", "1"),
            't2_3_1' => $this->HasilPKL->get_2_2("3", "1"),
            't2_4_1' => $this->HasilPKL->get_2_2("4", "1"),
            't2_5_1' => $this->HasilPKL->get_2_2("5", "1"),
            't2_6_1' => $this->HasilPKL->get_2_2("6", "1"),

            't2_1_2' => $this->HasilPKL->get_2_2("1", "2") + $this->HasilPKL->get_2_2("1", "") + $this->HasilPKL->get_2_2("1.0", "2") + $this->HasilPKL->get_2_2("1.0", ""),
            't2_2_2' => $this->HasilPKL->get_2_2("2", "2"),
            't2_3_2' => $this->HasilPKL->get_2_2("3", "2"),
            't2_4_2' => $this->HasilPKL->get_2_2("4", "2"),
            't2_5_2' => $this->HasilPKL->get_2_2("5", "2"),
            't2_6_2' => $this->HasilPKL->get_2_2("6", "2")

        ];
        $data = [
            'judul' => 'Hasil Kajian Tujuan 2 Riset 3',
            'menu' => $menu['riset3'],
            'data_2_1' => $data_2_1,
            'data_2_2' => $data_2_2,

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

    public function unduhtujuan1()
    {
        $datapengunduh = new UnduhHasilPklModel();
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 1 Riset 3',
            'menu' => $menu['riset3'],
        ];


        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan1', $data);
    }
    public function unduhtujuan2()
    {
        $menu = getMenu();
        $data_2_1 = [];

        $data_2_2 = [
            't2_1_1' => $this->HasilPKL->get_2_2("1", "1") + $this->HasilPKL->get_2_2("1.0", "1"),
            't2_2_1' => $this->HasilPKL->get_2_2("2", "1"),
            't2_3_1' => $this->HasilPKL->get_2_2("3", "1"),
            't2_4_1' => $this->HasilPKL->get_2_2("4", "1"),
            't2_5_1' => $this->HasilPKL->get_2_2("5", "1"),
            't2_6_1' => $this->HasilPKL->get_2_2("6", "1"),

            't2_1_2' => $this->HasilPKL->get_2_2("1", "2") + $this->HasilPKL->get_2_2("1", "") + $this->HasilPKL->get_2_2("1.0", "2") + $this->HasilPKL->get_2_2("1.0", ""),
            't2_2_2' => $this->HasilPKL->get_2_2("2", "2"),
            't2_3_2' => $this->HasilPKL->get_2_2("3", "2"),
            't2_4_2' => $this->HasilPKL->get_2_2("4", "2"),
            't2_5_2' => $this->HasilPKL->get_2_2("5", "2"),
            't2_6_2' => $this->HasilPKL->get_2_2("6", "2")

        ];

        $data = [
            'judul' => 'Hasil Kajian Tujuan 2 Riset 3',
            'menu' => $menu['riset3'],
            'data_2_1' => $data_2_1,
            'data_2_2' => $data_2_2,

        ];
        $datapengunduh = new UnduhHasilPklModel();
        $data2 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $datapengunduh->insert($data2);

        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan2', $data);
    }
    public function unduhtujuan3()
    {
        $datapengunduh = new UnduhHasilPklModel();
        $data3 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $datapengunduh->insert($data3);

        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 3 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan3', $data);
    }

    public function unduhtujuan4()
    {
        $datapengunduh = new UnduhHasilPklModel();
        $data4 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $datapengunduh->insert($data4);
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian 4 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan4', $data);
    }
}
