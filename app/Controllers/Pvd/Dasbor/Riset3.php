<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset3HasilSpModel;

class Riset3 extends BaseController
{
    protected $jenisindustri;
    protected $pendidikantertinggi;
    protected $jeniskelamin_riset3;
    protected $pendapatan_riset3;

    public function __construct()
    {
        $this->jenisindustri = new Riset3HasilSpModel();
        $this->pendidikantertinggi = new Riset3HasilSpModel();
        $this->jeniskelamin_riset3 = new Riset3HasilSpModel();
        $this->pendapatan_riset3 = new Riset3HasilSpModel();
    }
    public function index()
    {
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
        return view('pvd/pages/dasbor/riset3/index', $data);
    }

    public function menu2submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 2 Submenu 1 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/menu2/submenu1', $data);
    }

    public function menu2submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 2 Submenu 2 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/menu2/submenu2', $data);
    }

    public function menu3submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 1 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/menu3/submenu1', $data);
    }

    public function menu3submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 2 Riset 3',
            'menu' => $menu['riset3'],
        ];
        return view('pvd/pages/dasbor/riset3/menu3/submenu2', $data);
    }
}
