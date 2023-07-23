<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset3HasilPklModel;
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
    protected $datapengunduh;

    public function __construct()
    {
        $this->HasilPKL = new Riset3HasilPklModel();
        $this->tujuan1_5 = new Riset3HasilPklModel();
        $this->datapengunduh = new UnduhHasilPklModel();
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

    // menu Hasil Kajian
    public function hasilkajian1()
    {
        $menu = getMenu();
        $data1 = [
            'judul' => 'Hasil Kajian Tujuan 1',
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
            'judul' => 'Hasil Kajian Tujuan 2',
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
            'judul' => 'Hasil Kajian Tujuan 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan3', $data);
    }

    public function hasilkajian4()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian 4',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan4', $data);
    }

    // menu Dokumen
    public function kuesioner()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kuesioner',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/dokumen/kuesioner', $data);
    }

    public function bukupedoman()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Buku Pedoman',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/dokumen/bukupedoman', $data);
    }

    public function unduhtujuan1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 1',
            'menu' => $menu['riset3'],
        ];

        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
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
            'judul' => 'Hasil Kajian Tujuan 2',
            'menu' => $menu['riset3'],
            'data_2_1' => $data_2_1,
            'data_2_2' => $data_2_2,
        ];

        $data2 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data2);

        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan2', $data);
    }
    public function unduhtujuan3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian Tujuan 3',
            'menu' => $menu['riset3'],
        ];

        $data3 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data3);

        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan3', $data);
    }

    public function unduhtujuan4()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Kajian 4',
            'menu' => $menu['riset3'],
        ];

        $data4 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data4);
        
        return view('pvd/pages/dasbor/riset3/hasilkajian/tujuan4', $data);
    }
}
