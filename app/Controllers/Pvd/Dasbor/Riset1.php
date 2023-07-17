<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Models\Pvd\UserModel;
use App\Controllers\BaseController;
use App\Models\Pvd\Riset1HasilSpModel;
use App\Models\Pvd\UnduhHasilPklModel;
use App\Models\Pvd\Riset1HasilPklModel;

class Riset1 extends BaseController
{
    protected $jumlahanggota;
    protected $hasilsp2;
    protected $simcard;
    protected $dataresponden;
    protected $hasilpklriset1;
    protected $userModel;
    protected $data;
    protected $datapengunduh;

    public function __construct()
    {
        $this->jumlahanggota = new Riset1HasilSpModel();
        $this->hasilsp2 = new Riset1HasilSpModel();
        $this->simcard = new Riset1HasilSpModel();
        $this->dataresponden = new Riset1HasilSpModel();
        $this->hasilpklriset1 = new Riset1HasilPklModel();
        $this->userModel = new UserModel();
        $this->datapengunduh = new UnduhHasilPklModel();
    }

    public function index()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/index', $data);
    }
    public function statistikarelawansurabaya()
    {

        $menu = getMenu();
        $data = [
            'judul' => 'Statistik Relawan Surabaya Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/mpd/statistikrelawansby', $data);
    }
    public function qualityassurance()
    {

        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/mpd/qualityassurance', $data);
    }

    public function double_counting_evaluasi()
    {

        $menu = getMenu();
        $data = [
            'judul' => 'Double Counting Evaluasi Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/double_counting/evaluasi', $data);
    }

    public function family_grouping_evaluasi()
    {

        $menu = getMenu();
        $data = [
            'judul' => 'Family Grouping Evaluasi Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/family_grouping/visualisasi', $data);
    }


    public function wisnus_visualisasi()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Statistik Wisatawan Nusantara Visualisasi Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/wisnus/visualisasi', $data);
    }

    public function wisnus_tabulasi()
    {
        $menu = getMenu();
        $hasilpklriset1 = $this->hasilpklriset1->findAll();
        $data = [
            'judul' => 'Statistik Wisatawan Nusantara Tabulasi Riset 1',
            'hasilpklriset1' => $hasilpklriset1,
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/wisnus/tabulasi', $data);
    }

    public function kuesioner_sby()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kuesioner Kota Surabaya Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/kuesioner/surabaya', $data);
    }

    public function kuesioner_malang()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kuesioner Kota Malang Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/kuesioner/malang', $data);
    }

    public function unduhstatsrelawansby()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Statistik Relawan Surabaya Riset 1',
            'menu' => $menu['riset1'],
        ];


        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset1/mpd/statistikrelawansby', $data);
    }
    public function unduhqa()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Quality Assurance Riset 1',
            'menu' => $menu['riset1'],
        ];

        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset1/mpd/qualityassurance', $data);
    }

    public function unduhdc()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Double Counting Evaluasi Riset 1',
            'menu' => $menu['riset1'],
        ];

        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset1/double_counting/evaluasi', $data);
    }
    public function unduhfg()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Family Grouping Evaluasi Riset 1',
            'menu' => $menu['riset1'],
        ];

        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset1/family_grouping/visualisasi', $data);
    }

    public function unduhwisnus()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Statistik Wisatawan Nusantara Visualisasi Riset 1',
            'menu' => $menu['riset1'],
        ];

        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset1/wisnus/visualisasi', $data);
    }
}
