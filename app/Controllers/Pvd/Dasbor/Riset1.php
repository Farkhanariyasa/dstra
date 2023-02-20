<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset1HasilSpModel;

class Riset1 extends BaseController
{
    protected $jumlahanggota;
    protected $hasilsp2;
    protected $simcard;
    protected $dataresponden;

    public function __construct()
    {
        $this->jumlahanggota = new Riset1HasilSpModel();
        $this->hasilsp2 = new Riset1HasilSpModel();
        $this->simcard = new Riset1HasilSpModel();
        $this->dataresponden = new Riset1HasilSpModel();
    }

    public function index()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 1',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/index', $data);
    }

    public function double_counting_algoritma1()
    {
        $ja = [
            "ja0" => $this->jumlahanggota->getByJumlahAnggota(0),
            "ja1" => $this->jumlahanggota->getByJumlahAnggota(1),
            "ja2" => $this->jumlahanggota->getByJumlahAnggota(2),
            "ja3" => $this->jumlahanggota->getByJumlahAnggota(3),
            "ja4" => $this->jumlahanggota->getByJumlahAnggota(4),
            "ja5" => $this->jumlahanggota->getByJumlahAnggota(5),
        ];
        $jk = [
            "laki" => $this->hasilsp2->getJenisKelamin(1),
            "perempuan" => $this->hasilsp2->getJenisKelamin(2)
        ];
        $b524 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata1(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata1(2),
        ];

        $b525 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata2(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata2(2),
        ];
        $b526 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata3(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata3(2),
        ];

        $b527 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata4(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata4(2),
        ];

        $b528 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata5(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata5(2),
        ];

        $b529 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata6(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata6(2),
        ];

        $indosat = [
            "ya" => $this->simcard->getindosat(1)
        ];
        $xl = [
            "ya" => $this->simcard->getxlaxiata(1)
        ];
        $tri = [
            "ya" => $this->simcard->get3(1)
        ];
        $smartfren = [
            "ya" => $this->simcard->getsmartfren(1),
        ];
        $lainnya = [
            "ya" => $this->simcard->getlainnya(1),
        ];
        $menu = getMenu();
        $data = [
            'judul' => 'Double Counting | Visualisasi',
            'menu' => $menu['riset1'],
            'ja' => $ja,
            'jk' => $jk,
            'b524' => $b524,
            'b525' => $b525,
            'b526' => $b526,
            'b527' => $b527,
            'b528' => $b528,
            'b529' => $b529,
            'indosat' => $indosat,
            'xl' => $xl,
            'tri' => $tri,
            'smartfren' => $smartfren,
            'lainnya' => $lainnya
        ];
        return view('pvd/pages/dasbor/riset1/double_counting/visualisasi', $data);
    }

    public function double_counting_algoritma2()
    {
        $menu = getMenu();
        $dataresponden = $this->dataresponden->findAll();
        $data = [
            'judul' => 'Double Counting | Tabulasi',
            'dataresponden' => $dataresponden,
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/double_counting/tabulasi', $data);
    }
    public function double_counting_algoritma3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Double Counting | Algoritma 3',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/double_counting/algoritma3', $data);
    }

    public function family_grouping_visualisasi()
    {
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
            'judul' => 'Family Grouping | Visualisasi',
            'menu' => $menu['riset1'],
            'ja' => $ja,
        ];
        return view('pvd/pages/dasbor/riset1/family_grouping/visualisasi', $data);
    }

    public function family_grouping_tabulasi()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Family Grouping | Tabulasi',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/family_grouping/tabulasi', $data);
    }

    public function wisnus_visualisasi()
    {
        $ja = [
            "ja0" => $this->jumlahanggota->getByJumlahAnggota(0),
            "ja1" => $this->jumlahanggota->getByJumlahAnggota(1),
            "ja2" => $this->jumlahanggota->getByJumlahAnggota(2),
            "ja3" => $this->jumlahanggota->getByJumlahAnggota(3),
            "ja4" => $this->jumlahanggota->getByJumlahAnggota(4),
            "ja5" => $this->jumlahanggota->getByJumlahAnggota(5),
        ];
        $jk = [
            "laki" => $this->hasilsp2->getJenisKelamin(1),
            "perempuan" => $this->hasilsp2->getJenisKelamin(2)
        ];
        $b524 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata1(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata1(2),
        ];

        $b525 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata2(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata2(2),
        ];
        $b526 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata3(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata3(2),
        ];

        $b527 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata4(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata4(2),
        ];

        $b528 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata5(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata5(2),
        ];

        $b529 = [
            "ya" => $this->hasilsp2->getMelakukanPerjalananWisata6(1),
            "tidak" => $this->hasilsp2->getMelakukanPerjalananWisata6(2),
        ];

        $indosat = [
            "ya" => $this->simcard->getindosat(1)
        ];
        $xl = [
            "ya" => $this->simcard->getxlaxiata(1)
        ];
        $tri = [
            "ya" => $this->simcard->get3(1)
        ];
        $smartfren = [
            "ya" => $this->simcard->getsmartfren(1),
        ];
        $lainnya = [
            "ya" => $this->simcard->getlainnya(1),
        ];

        $menu = getMenu();

        $data = [
            'judul' => 'Statistik Wisatawan Nusantara | Visualisasi',
            'menu' => $menu['riset1'],
            'ja' => $ja,
            'jk' => $jk,
            'b524' => $b524,
            'b525' => $b525,
            'b526' => $b526,
            'b527' => $b527,
            'b528' => $b528,
            'b529' => $b529,
            'indosat' => $indosat,
            'xl' => $xl,
            'tri' => $tri,
            'smartfren' => $smartfren,
            'lainnya' => $lainnya
        ];
        return view('pvd/pages/dasbor/riset1/wisnus/visualisasi', $data);
    }

    public function wisnus_tabulasi()
    {
        $menu = getMenu();
        $dataresponden = $this->dataresponden->findAll();
        $data = [
            'judul' => 'Statistik Wisatawan Nusantara | Tabulasi',
            'dataresponden' => $dataresponden,
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/wisnus/tabulasi', $data);
    }

    public function python_script()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Double Counting',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/double_counting/python_script', $data);
    }
    
    public function kuesioner_sby()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kuesioner | Kota Surabaya',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/kuesioner/surabaya', $data);
    }

    public function kuesioner_malang()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kuesioner | Kota Malang',
            'menu' => $menu['riset1'],
        ];
        return view('pvd/pages/dasbor/riset1/kuesioner/malang', $data);
    }
}
