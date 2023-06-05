<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset4HasilPklModel;

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
        $this->uup = new Riset4HasilPklModel();
        $this->SDM = new Riset4HasilPklModel();
        $this->kecamatan = new Riset4HasilPklModel();
        $this->unitusahaTIK = new Riset4HasilPklModel();
        $this->pendapatan = new Riset4HasilPklModel();
        $this->umur = new Riset4HasilPklModel();
        $this->pendapatanNoFilter = new Riset4HasilPklModel();
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
            'ya' => $this->uup->getJumlahUUP('status_memanfaatkan_tik', 2),
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
        $uupJkUsia = [
            'laki0' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 0),
            'laki1' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 1),
            'laki2' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 2),
            'laki3' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 3),
            'laki4' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 4),
            'laki5' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 5),
            'laki6' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 6),
            'laki7' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 7),
            'laki8' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 8),
            'laki9' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 9),
            'laki10' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 1, 10), // asumsi umur tertua valid adalah 200
            'perempuan0' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 0),
            'perempuan1' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 1),
            'perempuan2' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 2),
            'perempuan3' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 3),
            'perempuan4' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 4),
            'perempuan5' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 5),
            'perempuan6' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 6),
            'perempuan7' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 7),
            'perempuan8' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 8),
            'perempuan9' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 9),
            'perempuan10' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'kelompok_usia', 2, 10), // asumsi umur tertua valid adalah 200
        ];

        $uupJkPendidikan = [
            'lakiDasar' => $this->uup->getJumlahUUPDua('gender_pemilik_pengelola', 'pendidikan_terakhir_pemilik_pengelola', 1, 1, 2),
            'lakiMenengah' => $this->uup->getJumlahUUPDua('gender_pemilik_pengelola', 'pendidikan_terakhir_pemilik_pengelola', 1, 3, 4),
            'lakiTinggi' => $this->uup->getJumlahUUPTiga('gender_pemilik_pengelola', 'pendidikan_terakhir_pemilik_pengelola', 1, 5, 6, 7),
            'perempuanDasar' => $this->uup->getJumlahUUPDua('gender_pemilik_pengelola', 'pendidikan_terakhir_pemilik_pengelola', 2, 1, 2),
            'perempuanMenengah' => $this->uup->getJumlahUUPDua('gender_pemilik_pengelola', 'pendidikan_terakhir_pemilik_pengelola', 2, 3, 4),
            'perempuanTinggi' => $this->uup->getJumlahUUPTiga('gender_pemilik_pengelola', 'pendidikan_terakhir_pemilik_pengelola', 2, 5, 6, 7),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Pemilik atau Pengelola Usaha Pariwisata',
            'menu' => $menu['riset4'],
            'uupJkPendidikan' => $uupJkPendidikan,
            'uupJkUsia' => $uupJkUsia,
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemilik_atau_pengelola_usaha_pariwisata', $data);
    }

    public function menu2submenu2()
    {
        $uupKotaBatuJenis = [
            'transportasi' => $this->uup->getJumlahUUP('jenis_usaha', 1),
            'makan' => $this->uup->getJumlahUUP('jenis_usaha', 2),
            'akomodasi' => $this->uup->getJumlahUUP('jenis_usaha', 3),
        ];
        
        $uupKotaBatuSkala = [
            'mikro' => $this->uup->getJumlahUUP('skala_usaha', 1),
            'kecil' => $this->uup->getJumlahUUP('skala_usaha', 2),
        ];

        $uupKotaBatuLokasi = [
            'ya' => $this->uup->getJumlahUUP('lokasi_usaha', 2),
            'tidak' => $this->uup->getJumlahUUP('lokasi_usaha', 1),
        ];

        $uupKotaBatuJenisSkala = [
            'transportasiMikro' => $this->uup->getJumlahUUP2('jenis_usaha', 'skala_usaha', 1, 1),
            'transportasiKecil' => $this->uup->getJumlahUUP2('jenis_usaha', 'skala_usaha', 1, 2),
            'makananMikro' => $this->uup->getJumlahUUP2('jenis_usaha', 'skala_usaha', 2, 1),
            'makananKecil' => $this->uup->getJumlahUUP2('jenis_usaha', 'skala_usaha', 2, 2),
            'akomodasiMikro' => $this->uup->getJumlahUUP2('jenis_usaha', 'skala_usaha', 3, 1),
            'akomodasiKecil' => $this->uup->getJumlahUUP2('jenis_usaha', 'skala_usaha', 3, 2),
        ];

        $uupKotaBatuJenisLokasi = [
            'transportasiYa' => $this->uup->getJumlahUUP2('jenis_usaha', 'lokasi_usaha', 1, 2),
            'transportasiTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'lokasi_usaha', 1, 1),
            'makananYa' => $this->uup->getJumlahUUP2('jenis_usaha', 'lokasi_usaha', 2, 2),
            'makananTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'lokasi_usaha', 2, 1),
            'akomodasiYa' => $this->uup->getJumlahUUP2('jenis_usaha', 'lokasi_usaha', 3, 2),
            'akomodasiTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'lokasi_usaha', 3, 1),
        ];

        $uupKotaBatuSkalaLokasi = [
            'mikroYa' => $this->uup->getJumlahUUP2('skala_usaha', 'lokasi_usaha', 1, 2),
            'mikroTidak' => $this->uup->getJumlahUUP2('skala_usaha', 'lokasi_usaha', 1, 1),
            'kecilYa' => $this->uup->getJumlahUUP2('skala_usaha', 'lokasi_usaha', 2, 2),
            'kecilTidak' => $this->uup->getJumlahUUP2('skala_usaha', 'lokasi_usaha', 2, 1),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Usaha Pariwisata',
            'menu' => $menu['riset4'],
            'uupKotaBatuJenis' => $uupKotaBatuJenis,
            'uupKotaBatuSkala' => $uupKotaBatuSkala,
            'uupKotaBatuLokasi' => $uupKotaBatuLokasi,
            'uupKotaBatuJenisSkala' => $uupKotaBatuJenisSkala,
            'uupKotaBatuJenisLokasi' => $uupKotaBatuJenisLokasi,
            'uupKotaBatuSkalaLokasi' => $uupKotaBatuSkalaLokasi,
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/usaha_pariwisata', $data);
    }

    public function menu2submenu3()
    {
        $uupStatusMemanfaatkan = [
            'tidak' => $this->uup->getJumlahUUP('status_memanfaatkan_tik', 1),
            'ya' => $this->uup->getJumlahUUP('status_memanfaatkan_tik', 2),
        ];
        $uupStatusMemanfaatkanJenis = [
            'transportasi' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'jenis_usaha', 2, 1),
            'makan' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'jenis_usaha', 2, 2),
            'akomodasi' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'jenis_usaha', 2, 3),
        ];
        $uupStatusMemanfaatkanJenisSkala = [
            'mikro' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'skala_usaha', 2, 1),
            'kecil' => $this->uup->getJumlahUUP2('status_memanfaatkan_tik', 'skala_usaha', 2, 2),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Pemanfaatan TIK',
            'menu' => $menu['riset4'],
            'uupStatusMemanfaatkan' => $uupStatusMemanfaatkan,
            'uupStatusMemanfaatkanJenis' => $uupStatusMemanfaatkanJenis,
            'uupStatusMemanfaatkanJenisSkala' => $uupStatusMemanfaatkanJenisSkala,
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemanfaatan_tik', $data);
    }

    public function menu3()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Karakteristik Kesiapan UUP',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup', $data);
    }

    // public function menu3submenu1()
    // {
    //     $menu = getMenu();
    //     $data = [
    //         'judul' => 'Infrastruktur dan Konektivitas',
    //         'menu' => $menu['riset4'],
    //     ];
    //     return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/infrastruktur_dan_konektivitas', $data);
    // }

    // public function menu3submenu2()
    // {
    //     $menu = getMenu();
    //     $data = [
    //         'judul' => 'Penggunaan TIK',
    //         'menu' => $menu['riset4'],
    //     ];
    //     return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/penggunaan_tik', $data);
    // }

    // public function menu3submenu3()
    // {
    //     $menu = getMenu();
    //     $data = [
    //         'judul' => 'Sumber Daya Manusia',
    //         'menu' => $menu['riset4'],
    //     ];
    //     return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/sumber_daya_manusia', $data);
    // }

    // public function menu3submenu4()
    // {
    //     $menu = getMenu();
    //     $data = [
    //         'judul' => 'Manajemen Organisasi',
    //         'menu' => $menu['riset4'],
    //     ];
    //     return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/manajemen_organisasi', $data);
    // }

    // public function menu3submenu5()
    // {
    //     $menu = getMenu();
    //     $data = [
    //         'judul' => 'Kesiapan Lingkungan Eksternal',
    //         'menu' => $menu['riset4'],
    //     ];
    //     return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/kesiapan_lingkungan_eksternal', $data);
    // }

    // public function menu3submenu6()
    // {
    //     $menu = getMenu();
    //     $data = [
    //         'judul' => 'Kendala dalam Pemanfaatan TIK',
    //         'menu' => $menu['riset4'],
    //     ];
    //     return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup/kendala_dalam_pemanfaatan_teknologi_informasi_dan_komunikasi', $data);
    // }

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
        $ikuptikPerDimensi = [
            'dimensi1' => $this->uup->getRataanGeo('dimensi1'),
            'dimensi2' => $this->uup->getRataanGeo('dimensi2'),
            'dimensi3' => $this->uup->getRataanGeo('dimensi3'),
            'dimensi4' => $this->uup->getRataanGeo('dimensi4'),
            'dimensi5' => $this->uup->getRataanGeo('dimensi5'),
            'dimensi6' => $this->uup->getRataanGeo('dimensi6'),
        ];

        $dimensi_kecamatan = [
            'batu' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "geometrik_mean", 'BATU'),
            'junrejo' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "geometrik_mean", 'JUNREJO'),
            'bumiaji' => $this->unitusahaTIK->getRataanGeo2("kecamatan", "geometrik_mean", 'BUMIAJI')
        ];

        $dimensi_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 1),
            'makanminum' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 3)
        ];

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
            'ikuptikPerDimensi' => $ikuptikPerDimensi,
            'dimensi_kecamatan' => $dimensi_kecamatan,
            'dimensi1_kecamatan' => $dimensi1_kecamatan,
            'dimensi2_kecamatan' => $dimensi2_kecamatan,
            'dimensi3_kecamatan' => $dimensi3_kecamatan,
            'dimensi4_kecamatan' => $dimensi4_kecamatan,
            'dimensi5_kecamatan' => $dimensi5_kecamatan,
            'dimensi6_kecamatan' => $dimensi6_kecamatan,
            'dimensi_jenis' => $dimensi_jenis,
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
