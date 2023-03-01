<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset4HasilSpModel;

class Riset4 extends BaseController
{
    protected $kecamatan;
    protected $unitusahaTIK;
    protected $pendapatan;
    protected $umur;
    protected $pendapatanNoFilter;

    public function __construct()
    {
        $this->kecamatan = new Riset4HasilSpModel();
        $this->unitusahaTIK = new Riset4HasilSpModel();
        $this->pendapatan = new Riset4HasilSpModel();
        $this->umur = new Riset4HasilSpModel();
        $this->pendapatanNoFilter = new Riset4HasilSpModel();
    }

    public function index()
    {
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
            'judul' => 'Dasbor Riset 4',
            'menu' => $menu['riset4'],
            'uu' => $uu,
            'pd' => $pd,
            'b401a' => $b401a,
            'b407a' => $b407a,
            'umur' => $umur,
            'pdnf' => $pdnf
        ];
        return view('pvd/pages/dasbor/riset4/index', $data);
    }

    public function menu2submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Pemilik atau Pengelola Usaha Pariwisata',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemilik_atau_pengelola_usaha_pariwisata', $data);
    }

    public function menu2submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Usaha Pariwisata',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/usaha_pariwisata', $data);
    }

    public function menu2submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Pemanfaatan TIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemanfaatan_tik', $data);
    }

    public function menu3submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Infrastruktur dan Konektivitas',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/infrastruktur_dan_konektivitas', $data);
    }

    public function menu3submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Penggunaan TIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/penggunaan_tik', $data);
    }

    public function menu3submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Sumber Daya Manusia',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/sumber_daya_manusia', $data);
    }

    public function menu3submenu4()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Manajemen Organisasi',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/manajemen_organisasi', $data);
    }

    public function menu3submenu5()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kesiapan Lingkungan Eksternal',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/kesiapan_lingkungan_eksternal', $data);
    }

    public function menu3submenu6()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kendala dalam Pemanfaatan TIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/kendala_dalam_pemanfaatan_tik', $data);
    }

    public function menu4submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Deskripsi Singkat',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/deskripsi_umum', $data);
    }

    public function menu4submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Dimensi',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/dimensi', $data);
    }

    public function menu4submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kecamatan',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/kecamatan', $data);
    }

    public function menu4submenu4()
    {
        $jasaTransportasi = [
            'b1091' => $this->unitusahaTIK->getRataanIKUPTIK(1),
            'b1092' => $this->unitusahaTIK->getRataanIKUPTIK(2),
            'b1093' => $this->unitusahaTIK->getRataanIKUPTIK(3),
        ];

        $jasaPenyediaMakananDanMinuman = [
            'b1091' => $this->unitusahaTIK->getRataanIKUPTIK2(1),
            'b1092' => $this->unitusahaTIK->getRataanIKUPTIK2(2),
            'b1093' => $this->unitusahaTIK->getRataanIKUPTIK2(3),
        ];

        $jasaAkomodasi = [
            'b1091' => $this->unitusahaTIK->getRataanIKUPTIK3(1),
            'b1092' => $this->unitusahaTIK->getRataanIKUPTIK3(2),
            'b1093' => $this->unitusahaTIK->getRataanIKUPTIK3(3),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 4',
            'menu' => $menu['riset4'],
            'jasaTransportasi' => $jasaTransportasi,
            'jasaPenyediaMakananDanMinuman' => $jasaPenyediaMakananDanMinuman,
            'jasaAkomodasi' => $jasaAkomodasi
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/jenis_unit_usaha', $data);
    }

}
