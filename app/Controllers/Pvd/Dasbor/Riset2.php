<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset2HasilSpModel;

class Riset2 extends BaseController
{
    protected $jeniskelamin;
    protected $jenispekerjaanutama;
    protected $pendidikantertinggi_riset2;
    protected $data_tabel_sp_riset2;

    public function __construct()
    {
        $this->jeniskelamin = new Riset2HasilSpModel();
        $this->jenispekerjaanutama = new Riset2HasilSpModel();
        $this->pendidikantertinggi_riset2 = new Riset2HasilSpModel();
        $this->data_tabel_sp_riset2 = new Riset2HasilSpModel();
    }

    public function index()
    {
        $jk = [
            'jk1' => $this->jeniskelamin->getByJenisKelamin("1"),
            'jk2' => $this->jeniskelamin->getByJenisKelamin("2")
        ];

        $jpu = [
            'jpu0' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("0"),
            'jpu1' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("1"),
            'jpu2' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("2"),
            'jpu3' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("3"),
            'jpu4' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("4"),
            'jpu5' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("5"),
            'jpu6' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("6"),
            'jpu7' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("7"),
            'jpu8' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("8"),
            'jpu9' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("9")
        ];

        $pt_2 = [
            'pt_21' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("1"),
            'pt_22' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("2"),
            'pt_23' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("3"),
            'pt_24' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("4"),
            'pt_25' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("5"),
            'pt_26' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("6"),
            'pt_27' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("7"),
        ];

        $menu = getMenu();

        $data = [
            'judul' => 'Dasbor Riset 2',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2
        ];
        return view('pvd/pages/dasbor/riset2/index', $data);
    }

    public function menu2submenu1()
    {
        $menu = getMenu();

        $jk = [
            'jk1' => $this->jeniskelamin->getByJenisKelamin("1"),
            'jk2' => $this->jeniskelamin->getByJenisKelamin("2")
        ];

        $jpu = [
            'jpu0' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("0"),
            'jpu1' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("1"),
            'jpu2' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("2"),
            'jpu3' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("3"),
            'jpu4' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("4"),
            'jpu5' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("5"),
            'jpu6' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("6"),
            'jpu7' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("7"),
            'jpu8' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("8"),
            'jpu9' => $this->jenispekerjaanutama->getByJenisPekerjaanUtama("9")
        ];

        $pt_2 = [
            'pt_21' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("1"),
            'pt_22' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("2"),
            'pt_23' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("3"),
            'pt_24' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("4"),
            'pt_25' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("5"),
            'pt_26' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("6"),
            'pt_27' => $this->pendidikantertinggi_riset2->getByPendidikanTertinggi("7"),
        ];

        $data = [
            'judul' => 'Hasil Penelitian | Banyak Wisatawan & Perjalanan Wisata',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2
        ];
        return view('pvd/pages/dasbor/riset2/menu2/submenu1', $data);
    }

    public function menu2submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Hasil Penelitian | Lama Kunjungan & Lama Bepergian Wisata',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/menu2/submenu2', $data);
    }

    public function menu3submenu1()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tabel Dinamis | Banyak Wisatawan & Perjalanan Wisata',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/menu3/submenu1', $data);
    }

    public function menu3submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Tabel Dinamis | Lama Kunjungan & Lama Bepergian Wisata',
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/menu3/submenu2', $data);
    }
}
