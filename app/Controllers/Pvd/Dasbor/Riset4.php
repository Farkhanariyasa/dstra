<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset4HasilSpModel;

class Riset4 extends BaseController
{
    protected $unitusahaTIK;
    protected $pendapatan;
    protected $umur;
    protected $pendapatanNoFilter;

    public function __construct()
    {
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
            'judul' => 'Menu 2 Submenu 1 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu2/submenu1', $data);
    }

    public function menu2submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 2 Submenu 2 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu2/submenu2', $data);
    }

    public function menu2submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 2 Submenu 3 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu2/submenu3', $data);
    }

    public function menu3submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 1 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu3/submenu1', $data);
    }

    public function menu3submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 2 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu3/submenu2', $data);
    }

    public function menu3submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 3 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu3/submenu3', $data);
    }

    public function menu3submenu4()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 4 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu3/submenu4', $data);
    }

    public function menu3submenu5()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 5 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu3/submenu5', $data);
    }

    public function menu3submenu6()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Menu 3 Submenu 6 Riset 4',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/menu3/submenu6', $data);
    }

}
