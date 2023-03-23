<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset2HasilSpModel;

class Riset2 extends BaseController
{
    protected $jeniskelamin;
    protected $jenispekerjaanutama;
    protected $pendidikantertinggi_riset2;
    protected $tujuanutama;
    protected $data_tabel_sp_riset2;

    public function __construct()
    {
        $this->jeniskelamin = new Riset2HasilSpModel();
        $this->jenispekerjaanutama = new Riset2HasilSpModel();
        $this->pendidikantertinggi_riset2 = new Riset2HasilSpModel();
        $this->tujuanutama = new Riset2HasilSpModel();
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

    public function hasil_tujuan1()
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
            'judul' => 'Hasil Penelitian | Banyak Wisatawan & Perjalanan Wisata',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2,
            'tu' => $tu,
        ];
        return view('pvd/pages/dasbor/riset2/hasil_penelitian/tujuan1', $data);
    }

    public function hasil_tujuan2()
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
            'judul' => 'Hasil Penelitian | Lama Kunjungan & Lama Bepergian Wisata',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2,
            'tu' => $tu,
        ];
        return view('pvd/pages/dasbor/riset2/hasil_penelitian/tujuan2', $data);
    }

    public function hasil_tujuan3()
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
            'judul' => 'Hasil Penelitian | Karakteristik Wisatawan & Perjalanan Wisata',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2,
            'tu' => $tu,
        ];
        return view('pvd/pages/dasbor/riset2/hasil_penelitian/tujuan3', $data);
    }

    public function hasil_tujuan4()
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
            'judul' => 'Hasil Penelitian | Analisis Inferensia',
            'menu' => $menu['riset2'],
            'jk' => $jk,
            'jpu' => $jpu,
            'pt_2' => $pt_2
        ];
        return view('pvd/pages/dasbor/riset2/hasil_penelitian/tujuan4', $data);
    }

    public function tabel_tujuan1()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tabel Dinamis | Banyak Wisatawan & Perjalanan Wisata',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tabulasi/tujuan1', $data);
    }

    public function tabel_tujuan2()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tabel Dinamis | Lama Kunjungan & Lama Bepergian Wisata',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tabulasi/tujuan2', $data);
    }

    public function tabel_tujuan3()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tabel Dinamis | Karakteristik Wisatawan & Perjalanan Wisata',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tabulasi/tujuan3', $data);
    }

    public function tabel_tujuan4()
    {
        $menu = getMenu();
        $data_tabel_sp_riset2 = $this->data_tabel_sp_riset2->findAll();
        $data = [
            'judul' => 'Tabel Dinamis | Analisis Inferensia',
            'data_tabel_sp_riset2' => $data_tabel_sp_riset2,
            'menu' => $menu['riset2'],
        ];
        return view('pvd/pages/dasbor/riset2/tabulasi/tujuan4', $data);
    }
}
