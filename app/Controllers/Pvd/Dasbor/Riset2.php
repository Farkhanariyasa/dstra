<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset2HasilSpModel;
use App\Models\Pvd\Riset2HasilPklModel;

class Riset2 extends BaseController
{
    protected $jeniskelamin;
    protected $jenispekerjaanutama;
    protected $pendidikantertinggi_riset2;
    protected $tujuanutama;
    protected $data_tabel_sp_riset2;
    protected $hasil_pkl_riset2;


    public function __construct()
    {
        $this->jeniskelamin = new Riset2HasilSpModel();
        $this->jenispekerjaanutama = new Riset2HasilSpModel();
        $this->pendidikantertinggi_riset2 = new Riset2HasilSpModel();
        $this->tujuanutama = new Riset2HasilSpModel();
        $this->data_tabel_sp_riset2 = new Riset2HasilSpModel();
        $this->hasil_pkl_riset2 = new Riset2HasilPklModel();
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

    public function tujuan1_hasil1()
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

        $tu = [
            'tu1' => $this->tujuanutama->getByTujuanUtama("1"),
            'tu2' => $this->tujuanutama->getByTujuanUtama("2"),
            'tu3' => $this->tujuanutama->getByTujuanUtama("3"),
            'tu4' => $this->tujuanutama->getByTujuanUtama("4"),
            'tu5' => $this->tujuanutama->getByTujuanUtama("5"),
            'tu6' => $this->tujuanutama->getByTujuanUtama("6"),
            'tu7' => $this->tujuanutama->getByTujuanUtama("7"),
            'tu8' => $this->tujuanutama->getByTujuanUtama("8"),
            'tu9' => $this->tujuanutama->getByTujuanUtama("9"),
            'tu10' => $this->tujuanutama->getByTujuanUtama("10"),
            'tu11' => $this->tujuanutama->getByTujuanUtama("11"),
        ];

        $data = [
            'judul' => 'Tujuan 1 Estimasi Banyak Wisatawan',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2,
            'tu' => $tu,
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/hasil1', $data);
    }

    public function tujuan1_hasil2()
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

        $tu = [
            'tu1' => $this->tujuanutama->getByTujuanUtama("1"),
            'tu2' => $this->tujuanutama->getByTujuanUtama("2"),
            'tu3' => $this->tujuanutama->getByTujuanUtama("3"),
            'tu4' => $this->tujuanutama->getByTujuanUtama("4"),
            'tu5' => $this->tujuanutama->getByTujuanUtama("5"),
            'tu6' => $this->tujuanutama->getByTujuanUtama("6"),
            'tu7' => $this->tujuanutama->getByTujuanUtama("7"),
            'tu8' => $this->tujuanutama->getByTujuanUtama("8"),
            'tu9' => $this->tujuanutama->getByTujuanUtama("9"),
            'tu10' => $this->tujuanutama->getByTujuanUtama("10"),
            'tu11' => $this->tujuanutama->getByTujuanUtama("11"),
        ];

        $data = [
            'judul' => 'Tujuan 1 Estimasi Banyak Perjalanan',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2,
            'tu' => $tu,
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/hasil2', $data);
    }

    public function tujuan1_hasil3()
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

        $tu = [
            'tu1' => $this->tujuanutama->getByTujuanUtama("1"),
            'tu2' => $this->tujuanutama->getByTujuanUtama("2"),
            'tu3' => $this->tujuanutama->getByTujuanUtama("3"),
            'tu4' => $this->tujuanutama->getByTujuanUtama("4"),
            'tu5' => $this->tujuanutama->getByTujuanUtama("5"),
            'tu6' => $this->tujuanutama->getByTujuanUtama("6"),
            'tu7' => $this->tujuanutama->getByTujuanUtama("7"),
            'tu8' => $this->tujuanutama->getByTujuanUtama("8"),
            'tu9' => $this->tujuanutama->getByTujuanUtama("9"),
            'tu10' => $this->tujuanutama->getByTujuanUtama("10"),
            'tu11' => $this->tujuanutama->getByTujuanUtama("11"),
        ];

        $data = [
            'judul' => 'Tujuan 1 Kategori Perjalanan',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2,
            'tu' => $tu,
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/hasil3', $data);
    }

    public function tujuan1_tabulasi()
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
            'judul' => 'Tujuan 1 Tabulasi',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2
        ];
        return view('pvd/pages/dasbor/riset2/tujuan1/tabulasi', $data);
    }

    public function tujuan2_hasil1()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 2 Lama Kunjungan & Bepergian Turis',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan2/hasil1', $data);
    }

    public function tujuan2_hasil2()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 2 Lama Kunjungan & Bepergian Pelancong',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan2/hasil2', $data);
    }

    public function tujuan2_tabulasi()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 2 Tabulasi',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan2/tabulasi', $data);
    }

    public function tujuan3_hasil1()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 3 Karakteristik Wisatawan',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan3/hasil1', $data);
    }

    public function tujuan3_hasil2()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 3 Karakteristik Perjalanan',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan3/hasil2', $data);
    }

    public function tujuan3_tabulasi()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 3 Tabulasi',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan3/tabulasi', $data);
    }

    public function tujuan4_hasil1()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 4 Zero-Inflation ZINB',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tujuan4/hasil1', $data);
    }

    public function tujuan4_hasil2()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tujuan 4 Count ZINB',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
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
