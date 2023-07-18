<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset2HasilPklModel;

class Riset2 extends BaseController
{
    protected $hasil_pkl_riset2;


    public function __construct()
    {
        $this->hasil_pkl_riset2 = new Riset2HasilPklModel();
    }

    public function index()
    {
        $menu = getMenu();

        $data = [
            'judul' => 'Dasbor Riset 2',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/index', $data);
    }

    public function tujuan1_hasil1()
    {
        $menu = getMenu();

        $data = [
            'judul' => 'Tujuan 1 Estimasi Banyak Wisatawan',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/hasil1', $data);
    }

    public function tujuan1_hasil2()
    {
        $menu = getMenu();

        $data = [
            'judul' => 'Tujuan 1 Estimasi Banyak Perjalanan',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/hasil2', $data);
    }

    public function tujuan1_hasil3()
    {
        $menu = getMenu();

        $data = [
            'judul' => 'Tujuan 1 Kategori Perjalanan',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/hasil3', $data);
    }

    public function tujuan1_tabulasi()
    {
        $menu = getMenu();

        $data = [
            'judul' => 'Tujuan 1 Tabulasi',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/tabulasi', $data);
    }

    public function tujuan2_hasil1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 2 Lama Kunjungan & Bepergian Turis',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan2/hasil1', $data);
    }

    public function tujuan2_hasil2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 2 Lama Kunjungan & Bepergian Pelancong',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan2/hasil2', $data);
    }

    public function tujuan2_tabulasi()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 2 Tabulasi',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan2/tabulasi', $data);
    }

    public function tujuan3_hasil1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 3 Karakteristik Wisatawan',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan3/hasil1', $data);
    }

    public function tujuan3_hasil2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 3 Karakteristik Perjalanan',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan3/hasil2', $data);
    }

    public function tujuan3_tabulasi()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 3 Tabulasi',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan3/tabulasi', $data);
    }

    public function tujuan4_hasil1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 4 Zero-Inflation ZINB',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan4/hasil1', $data);
    }

    public function tujuan4_hasil2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tujuan 4 Count ZINB',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan4/hasil2', $data);
    }

    public function tujuan4_tabulasi()
    {
        $menu = getMenu();
        $hasil_pkl_riset2 = $this->hasil_pkl_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 4 Tabulasi',
            'hasil_pkl_riset2' => $hasil_pkl_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan4/tabulasi', $data);
    }
}
