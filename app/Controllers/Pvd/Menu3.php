<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset1HasilSpModel;

class Menu3 extends BaseController
{

    protected $jumlahanggota;

    public function __construct()
    {
        $this->jumlahanggota = new Riset1HasilSpModel();
    }

    public function index($riset)
    {
        $judul = '';
        switch ($riset) {
            case 'riset1':

                $judul = 'Dasbor Riset 1';

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;

            case 'riset2':

                $menu = getMenu();

                $judul = 'Dasbor Riset 2';
                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;

            case 'riset3':
                $judul = 'Dasbor Riset 3';

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;

            case 'riset4':
                $judul = 'Dasbor Riset 4';

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/index', $data);
    }

    // submenu 3
    public function submenu3($riset)
    {
        $judul = '';
        switch ($riset) {
            case 'riset1':

                $judul = 'Menu 3 Riset 1';

                $ja = [
                    "ja0" => $this->jumlahanggota->getByJumlahAnggota(0),
                    "ja1" => $this->jumlahanggota->getByJumlahAnggota(1),
                    "ja2" => $this->jumlahanggota->getByJumlahAnggota(2),
                    "ja3" => $this->jumlahanggota->getByJumlahAnggota(3),
                    "ja4" => $this->jumlahanggota->getByJumlahAnggota(4),
                    "ja5" => $this->jumlahanggota->getByJumlahAnggota(5),
                ];

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                    'ja' => $ja,
                    
                ];
                break;

            case 'riset2':
               
                $menu = getMenu();

                $judul = 'Menu 3 Riset 2';
                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                   
                ];
                break;

            case 'riset3':
                $judul = 'Menu 3 Riset 3';
                
                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;

            case 'riset4':
                $judul = 'Menu 3 Riset 4';

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/menu3/submenu3', $data);
    }

    // submenu 4
    public function submenu4($riset)
    {
        $judul = '';
        switch ($riset) {
            case 'riset1':

                $judul = 'Menu 3 Riset 1';

                
                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                    
                ];
                break;

            case 'riset2':
               
                $menu = getMenu();

                $judul = 'Menu 3 Riset 2';
                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                   
                ];
                break;

            case 'riset3':
                $judul = 'Menu 3 Riset 3';
                
                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;

            case 'riset4':
                $judul = 'Menu 3 Riset 4';

                $menu = getMenu();

                $data = [
                    'judul' => $judul,
                    'menu' => $menu[$riset],
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/menu3/submenu4', $data);
    }
}