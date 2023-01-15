<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Hasil PKL Polstat STIS T.A 2022/2023',
        ];

        return view('pvd/pages/landing_page/index', $data);
    }

    public function riset($riset)
    {
        $judul = '';
        switch ($riset) {
            case 'riset1':
                $judul = 'Hasil PKL Riset 1';
                break;
            case 'riset2':
                $judul = 'Hasil PKL Riset 2';
                break;
            case 'riset3':
                $judul = 'Hasil PKL Riset 3';
                break;
            case 'riset4':
                $judul = 'Hasil PKL Riset 4';
                break;
        }
        $data = [
            'judul' => $judul,
        ];

        return view('pvd/pages/landing_page/' . $riset, $data);
    }
}
