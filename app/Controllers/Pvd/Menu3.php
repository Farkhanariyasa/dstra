<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

class Menu3 extends BaseController
{

    public function __construct()
    {
        
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