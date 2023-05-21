<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset4HasilSpModel;

class Riset4 extends BaseController
{
    protected $uup;
    protected $SDM;
    protected $kecamatan;
    protected $unitusahaTIK;
    protected $pendapatan;
    protected $umur;
    protected $pendapatanNoFilter;

    public function __construct()
    {
        $this->uup = new Riset4HasilSpModel();
        $this->SDM = new Riset4HasilSpModel();
        $this->kecamatan = new Riset4HasilSpModel();
        $this->unitusahaTIK = new Riset4HasilSpModel();
        $this->pendapatan = new Riset4HasilSpModel();
        $this->umur = new Riset4HasilSpModel();
        $this->pendapatanNoFilter = new Riset4HasilSpModel();
    }

    public function index()
    {
        $usiaPemilikPengelola = [
            'laki-laki.min' => $this->uup->getMin('gender_pemilik_pengelola', 'usia_pemilik_pengelola', 1),
            'laki-laki.max' => $this->uup->getMax('gender_pemilik_pengelola', 'usia_pemilik_pengelola', 1),
            'perempuan.min' => $this->uup->getMin('gender_pemilik_pengelola', 'usia_pemilik_pengelola', 2),
            'perempuan.max' => $this->uup->getMax('gender_pemilik_pengelola', 'usia_pemilik_pengelola', 2),
        ];

        $uupKotaBatu = [
            'transportasi' => $this->uup->getJumlahUUP('jenis_usaha', 1),
            'makan' => $this->uup->getJumlahUUP('jenis_usaha', 2),
            'akomodasi' => $this->uup->getJumlahUUP('jenis_usaha', 3),
        ];

        $uupKecBatu = [
            'transportasi' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 1, 'BATU'),
            'makan' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 2, 'BATU'),
            'akomodasi' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 3, 'BATU'),
        ];

        $uupKecJunrejo = [
            'transportasi' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 1, 'JUNREJO'),
            'makan' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 2, 'JUNREJO'),
            'akomodasi' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 3, 'JUNREJO'),
        ];

        $uupKecBumiaji = [
            'transportasi' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 1, 'BUMIAJI'),
            'makan' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 2, 'BUMIAJI'),
            'akomodasi' => $this->uup->getJumlahUUP2('jenis_usaha', 'kecamatan', 3, 'BUMIAJI'),
        ];

        $uupKotaBatuProduksi = [
            'transportasi' => $this->uup->getRataan('jenis_usaha',  'omzet', 1),
            'makan' => $this->uup->getRataan('jenis_usaha',  'omzet', 2),
            'akomodasi' => $this->uup->getRataan('jenis_usaha',  'omzet', 3),
        ];

        $uupKecBatuProduksi = [
            'transportasi' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 1, 'BATU'),
            'makan' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 2, 'BATU'),
            'akomodasi' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 3, 'BATU'),
        ];

        $uupKecJunrejoProduksi = [
            'transportasi' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 1, 'JUNREJO'),
            'makan' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 2, 'JUNREJO'),
            'akomodasi' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 3, 'JUNREJO'),
        ];

        $uupKecBumiajiProduksi = [
            'transportasi' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 1, 'BUMIAJI'),
            'makan' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 2, 'BUMIAJI'),
            'akomodasi' => $this->uup->getRataan2('jenis_usaha', 'kecamatan',  'omzet', 3, 'BUMIAJI'),
        ];

        $uupKotaBatuSkala = [
            'mikro' => $this->uup->getJumlahUUP('skala_usaha', 1),
            'kecil' => $this->uup->getJumlahUUP('skala_usaha', 2),
        ];

        $uupKecBatuSkala = [
            'mikro' => $this->uup->getJumlahUUP2('skala_usaha', 'kecamatan', 1, 'BATU'),
            'kecil' => $this->uup->getJumlahUUP2('skala_usaha', 'kecamatan', 2, 'BATU'),
        ];

        $uupKecJunrejoSkala = [
            'mikro' => $this->uup->getJumlahUUP2('skala_usaha', 'kecamatan', 1, 'JUNREJO'),
            'kecil' => $this->uup->getJumlahUUP2('skala_usaha', 'kecamatan', 2, 'JUNREJO'),
        ];

        $uupKecBumiajiSkala = [
            'mikro' => $this->uup->getJumlahUUP2('skala_usaha', 'kecamatan', 1, 'BUMIAJI'),
            'kecil' => $this->uup->getJumlahUUP2('skala_usaha', 'kecamatan', 2, 'BUMIAJI'),
        ];

        $ikuptikPerDimensi = [
            'dimensi1' => $this->uup->getRataanGeo('dimensi1'),
            'dimensi2' => $this->uup->getRataanGeo('dimensi2'),
            'dimensi3' => $this->uup->getRataanGeo('dimensi3'),
            'dimensi4' => $this->uup->getRataanGeo('dimensi4'),
            'dimensi5' => $this->uup->getRataanGeo('dimensi5'),
            'dimensi6' => $this->uup->getRataanGeo('dimensi6'),
        ];

        $tingkatPendidikan = [
            'tingkatPendidikan1' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 1),
            'tingkatPendidikan2' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 2),
            'tingkatPendidikan3' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 3),
            'tingkatPendidikan4' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 4),
            'tingkatPendidikan5' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 5),
            'tingkatPendidikan6' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 6),
            'tingkatPendidikan7' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 7),
        ];

        $pemanfaatanTik = [
            'tidak' => $this->uup->getJumlahUUP('status_memanfaatkan_tik', 1),
            'ya' => $this->uup->getJumlahUUP('pendidikan_terakhir_pemilik_pengelola', 2),
        ];

        $pemanfaatanTikJenis = [
            'transportasi' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'jenis_usaha', 2, 1),
            'makanan' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'jenis_usaha', 2, 2),
            'akomodasi' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'jenis_usaha', 2, 3),
        ];

        $pemanfaatanTikSkala = [
            'mikro' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'skala_usaha', 2, 1),
            'kecil' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'skala_usaha', 2, 2),
        ];

        $pemanfaatanTikKegiatan =[
            'penjualan' => $this->uup->getJumlahUUP3('q231_407a', 1),
            'promosi' => $this->uup->getJumlahUUP3('q231_405a', 1),
            'transaksi' => $this->uup->getJumlahUUP3('q221_409a', 1),
            'logistik' => $this->uup->getJumlahUUP3('q241_417', 1),
            'faktur' => $this->uup->getJumlahUUP3('q222_411', 1),
            'pencatatanKeuangan' => $this->uup->getJumlahUUP3('q211_413', 1),
            'tenagaKerja' => $this->uup->getJumlahUUP3('q251_419', 1),
            'perencanaankeuangan' => $this->uup->getJumlahUUP3('q261_415', 1),
        ];

        // ke bawah adalah kode dummy
        // $kecamatanEkonomi = [
        //     'batu1' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 1, 1),
        //     'batu2' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 1, 2),
        //     'batu3' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 1, 3),
        //     'batu4' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 1, 4),
        //     'junrejo1' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 2, 1),
        //     'junrejo2' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 2, 2),
        //     'junrejo3' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 2, 3),
        //     'junrejo4' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 2, 4),
        //     'bumiaji1' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 3, 1),
        //     'bumiaji2' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 3, 2),
        //     'bumiaji3' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 3, 3),
        //     'bumiaji4' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b501', 3, 4),
        // ];

        // $kecamatanArsipDiigital = [
        //     'batu1' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 1, 1),
        //     'batu2' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 1, 2),
        //     'batu3' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 1, 3),
        //     'batu4' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 1, 4),
        //     'junrejo1' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 2, 1),
        //     'junrejo2' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 2, 2),
        //     'junrejo3' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 2, 3),
        //     'junrejo4' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 2, 4),
        //     'bumiaji1' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 3, 1),
        //     'bumiaji2' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 3, 2),
        //     'bumiaji3' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 3, 3),
        //     'bumiaji4' => $this->SDM->getJumlahUUPSDM('jenis_usaha', 'b502', 3, 4),
        // ];

        // $uu = [
        //     'uu1' => $this->unitusahaTIK->getUnitUsahaTIK(1),
        //     'uu2' => $this->unitusahaTIK->getUnitUsahaTIK(2),
        //     'uu3' => $this->unitusahaTIK->getUnitUsahaTIK(3),
        //     'uu4' => $this->unitusahaTIK->getUnitUsahaTIK(4),
        // ];

        // $b401a = [
        //     'tidak' => $this->unitusahaTIK->getUnitUsahaTIK1(1),
        //     'ya' => $this->unitusahaTIK->getUnitUsahaTIK1(2),
        // ];

        // $q231_407a = [
        //     'q231_407a1' => $this->unitusahaTIK->getUnitUsahaTIK2(1),
        //     'q231_407a2' => $this->unitusahaTIK->getUnitUsahaTIK2(2),
        //     'q231_407a3' => $this->unitusahaTIK->getUnitUsahaTIK2(3),
        //     'q231_407a4' => $this->unitusahaTIK->getUnitUsahaTIK2(4),
        // ];

        // $pd = $this->pendapatan->getPendapatan();
        // $umur = $this->umur->getUmur();
        // $pdnf = $this->pendapatanNoFilter->getPendapatanNoFilter();
        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 4',
            'menu' => $menu['riset4'],
            'uupKotaBatu' => $uupKotaBatu,
            'uupKecBatu' => $uupKecBatu,
            'uupKecJunrejo' => $uupKecJunrejo,
            'uupKecBumiaji' => $uupKecBumiaji,
            'uupKotaBatuProduksi' => $uupKotaBatuProduksi,
            'uupKecBatuProduksi' => $uupKecBatuProduksi,
            'uupKecJunrejoProduksi' => $uupKecJunrejoProduksi,
            'uupKecBumiajiProduksi' => $uupKecBumiajiProduksi,
            'uupKotaBatuSkala' => $uupKotaBatuSkala,
            'uupKecBatuSkala' => $uupKecBatuSkala,
            'uupKecJunrejoSkala' => $uupKecJunrejoSkala,
            'uupKecBumiajiSkala' => $uupKecBumiajiSkala,
            'ikuptikPerDimensi' => $ikuptikPerDimensi,
            'tingkatPendidikan' => $tingkatPendidikan,
            'pemanfaatanTik' => $pemanfaatanTik,
            'pemanfaatanTikJenis' => $pemanfaatanTikJenis,
            'pemanfaatanTikSkala' => $pemanfaatanTikSkala,
            'pemanfaatanTikKegiatan' => $pemanfaatanTikKegiatan,
            'usiaPemilikPengelola' => $usiaPemilikPengelola,

            // ke bawah adalah kode dummy
            // 'uu' => $uu,
            // 'pd' => $pd,
            // 'b401a' => $b401a,
            // 'q231_407a' => $q231_407a,
            // 'umur' => $umur,
            // 'pdnf' => $pdnf,
            // 'kecamatanEkonomi' => $kecamatanEkonomi,
            // 'kecamatanArsipDiigital' => $kecamatanArsipDiigital
        ];
        return view('pvd/pages/dasbor/riset4/index', $data);
    }

    public function menu2submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Pemilik atau Pengelola Usaha Pariwisata',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemilik_atau_pengelola_usaha_pariwisata', $data);
    }

    public function menu2submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Usaha Pariwisata',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/usaha_pariwisata', $data);
    }

    public function menu2submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Pemanfaatan TIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemanfaatan_tik', $data);
    }

    public function menu3submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Infrastruktur dan Konektivitas',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/infrastruktur_dan_konektivitas', $data);
    }

    public function menu3submenu2()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Penggunaan TIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/penggunaan_tik', $data);
    }

    public function menu3submenu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Sumber Daya Manusia',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/sumber_daya_manusia', $data);
    }

    public function menu3submenu4()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Manajemen Organisasi',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/manajemen_organisasi', $data);
    }

    public function menu3submenu5()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kesiapan Lingkungan Eksternal',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/kesiapan_lingkungan_eksternal', $data);
    }

    public function menu3submenu6()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Kendala dalam Pemanfaatan TIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/kendala_dalam_pemanfaatan_tik', $data);
    }

    public function menu4submenu1()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Deskripsi Singkat',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/deskripsi_umum', $data);
    }

    public function menu4submenu2()
    {         
        $dimensi1_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi1", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi1", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi1", 'BUMIAJI')
        ];

        $dimensi1_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 3)
        ];

        $dimensi2_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi2", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi2", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi2", 'BUMIAJI')
        ];

        $dimensi2_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 3)
        ];

        $dimensi3_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi3", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi3", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi3", 'BUMIAJI')
        ];

        $dimensi3_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 3)
        ];

        $dimensi4_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi4", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi4", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi4", 'BUMIAJI')
        ];

        $dimensi4_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 3)
        ];

        $dimensi5_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi5", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi5", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi5", 'BUMIAJI')
        ];

        $dimensi5_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 3)
        ];

        $dimensi6_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi6", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi6", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "dimensi6", 'BUMIAJI')
        ];

        $dimensi6_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 3)
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 4',
            'menu' => $menu['riset4'],
            'dimensi1_kecamatan' => $dimensi1_kecamatan,
            'dimensi2_kecamatan' => $dimensi2_kecamatan,
            'dimensi3_kecamatan' => $dimensi3_kecamatan,
            'dimensi4_kecamatan' => $dimensi4_kecamatan,
            'dimensi5_kecamatan' => $dimensi5_kecamatan,
            'dimensi6_kecamatan' => $dimensi6_kecamatan,
            'dimensi1_jenis' => $dimensi1_jenis,
            'dimensi2_jenis' => $dimensi2_jenis,
            'dimensi3_jenis' => $dimensi3_jenis,
            'dimensi4_jenis' => $dimensi4_jenis,
            'dimensi5_jenis' => $dimensi5_jenis,
            'dimensi6_jenis' => $dimensi6_jenis,
        ];

        return view('pvd/pages/dasbor/riset4/ikuptik/dimensi', $data);
    }

    public function menu4submenu3()
    {
        $q231_407a = [
            'q231_407a1' => $this->unitusahaTIK->getUnitUsahaTIK2(1),
            'q231_407a2' => $this->unitusahaTIK->getUnitUsahaTIK2(2),
            'q231_407a3' => $this->unitusahaTIK->getUnitUsahaTIK2(3),
            'q231_407a4' => $this->unitusahaTIK->getUnitUsahaTIK2(4),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Kecamatan',
            'menu' => $menu['riset4'],
            'q231_407a' => $q231_407a,
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/kecamatan', $data);
    }

    public function menu4submenu4()
    {
        $jasaTransportasi = [
            'jenis_usaha1' => $this->unitusahaTIK->getRataanIKUPTIK(1),
            'jenis_usaha2' => $this->unitusahaTIK->getRataanIKUPTIK(2),
            'jenis_usaha3' => $this->unitusahaTIK->getRataanIKUPTIK(3),
        ];

        $jasaPenyediaMakananDanMinuman = [
            'jenis_usaha1' => $this->unitusahaTIK->getRataanIKUPTIK2(1),
            'jenis_usaha2' => $this->unitusahaTIK->getRataanIKUPTIK2(2),
            'jenis_usaha3' => $this->unitusahaTIK->getRataanIKUPTIK2(3),
        ];

        $jasaAkomodasi = [
            'jenis_usaha1' => $this->unitusahaTIK->getRataanIKUPTIK3(1),
            'jenis_usaha2' => $this->unitusahaTIK->getRataanIKUPTIK3(2),
            'jenis_usaha3' => $this->unitusahaTIK->getRataanIKUPTIK3(3),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Dasbor Riset 4',
            'menu' => $menu['riset4'],
            'jasaTransportasi' => $jasaTransportasi,
            'jasaPenyediaMakananDanMinuman' => $jasaPenyediaMakananDanMinuman,
            'jasaAkomodasi' => $jasaAkomodasi
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/jenis_unit_usaha', $data);
    }

    public function menu5()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Faktor Pengaruh IKUPTIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/faktor_pengaruh_ikuptik', $data);
    }

    public function menu6()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Dokumen Terkait',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/dokumen_terkait', $data);
    }

}
