<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;

class Dasbor extends BaseController
{
    public function index($riset)
    {
        $judul = '';
        switch ($riset) {
            case 'riset1':
                $judul = 'Riset 1';
                $data = [
                    'judul' => $judul,
                ];
                break;

            case 'riset2':
                $judul = 'Riset 2';
                $data = [
                    'judul' => $judul,
                ];
                break;

            case 'riset3':
                $judul = 'Riset 3';
                $data = [
                    'judul' => $judul,
                ];
                break;

            case 'riset4':
                $judul = 'Riset 4';
                $data = [
                    'judul' => $judul,
                ];
                break;
        }

        return view('pvd/pages/dasbor/' . $riset . '/index', $data);
    }
}
