<?php

namespace App\Controllers\Pvd\Dasbor;

use App\Controllers\BaseController;
use App\Models\Pvd\Riset4HasilPklModel;
use App\Models\Pvd\UnduhHasilPklModel;

class Riset4 extends BaseController
{
    protected $uup;
    protected $SDM;
    protected $kecamatan;
    protected $unitusahaTIK;
    protected $pendapatan;
    protected $umur;
    protected $pendapatanNoFilter;
    protected $datapengunduh;

    public function __construct()
    {
        $this->uup = new Riset4HasilPklModel();
        $this->SDM = new Riset4HasilPklModel();
        $this->kecamatan = new Riset4HasilPklModel();
        $this->unitusahaTIK = new Riset4HasilPklModel();
        $this->pendapatan = new Riset4HasilPklModel();
        $this->umur = new Riset4HasilPklModel();
        $this->pendapatanNoFilter = new Riset4HasilPklModel();
        $this->datapengunduh = new UnduhHasilPklModel();
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
        ];
        return view('pvd/pages/dasbor/riset4/index', $data);
    }

    public function pemilik_atau_pengelola_usaha_pariwisata()
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

    public function unit_usaha_pariwisata()
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
            'judul' => 'Unit Usaha Pariwisata',
            'menu' => $menu['riset4'],
            'uupKotaBatuJenis' => $uupKotaBatuJenis,
            'uupKotaBatuSkala' => $uupKotaBatuSkala,
            'uupKotaBatuLokasi' => $uupKotaBatuLokasi,
            'uupKotaBatuJenisSkala' => $uupKotaBatuJenisSkala,
            'uupKotaBatuJenisLokasi' => $uupKotaBatuJenisLokasi,
            'uupKotaBatuSkalaLokasi' => $uupKotaBatuSkalaLokasi,
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/unit_usaha_pariwisata', $data);
    }

    public function pemanfaatan_tik()
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

    public function karakteristik_kesiapan_uup()
    {
        $jenisKelaminTingkat = [
            'lakiTidak' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 1, 1),
            'lakiCukup' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 1, 2),
            'lakiSiap' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 1, 3),
            'perempuanTidak' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 2, 1),
            'perempuanCukup' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 2, 2),
            'perempuanSiap' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 2, 3),
        ];

        $usiaTingkat = [
            'k1Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 1, 1),
            'k1Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 1, 2),
            'k1Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 1, 3),
            'k2Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 2, 1),
            'k2Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 2, 2),
            'k2Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 2, 3),
            'k3Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 3, 1),
            'k3Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 3, 2),
            'k3Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 3, 3),
            'k4Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 4, 1),
            'k4Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 4, 2),
            'k4Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 4, 3),
            'k5Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 5, 1),
            'k5Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 5, 2),
            'k5Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 5, 3),
            'k6Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 6, 1),
            'k6Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 6, 2),
            'k6Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 6, 3),
            'k7Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 7, 1),
            'k7Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 7, 2),
            'k7Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 7, 3),
            'k8Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 8, 1),
            'k8Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 8, 2),
            'k8Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 8, 3),
            'k9Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 9, 1),
            'k9Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 9, 2),
            'k9Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 9, 3),
            'k10Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 10, 1),
            'k10Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 10, 2),
            'k10Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 10, 3),
        ];

        $pendidikanTingkat = [
            'dasarTidak' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 1, 1),
            'dasarCukup' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 1, 2),
            'dasarSiap' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 1, 3),
            'menengahTidak' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 2, 1),
            'menengahCukup' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 2, 2),
            'menengahSiap' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 2, 3),
            'tinggiTidak' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 3, 1),
            'tinggiCukup' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 3, 2),
            'tinggiSiap' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 3, 3),
        ];

        $jenisUsahaTingkat = [
            'transportasiTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 1, 1),
            'transportasiCukup' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 1, 2),
            'transportasiSiap' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 1, 3),
            'makananTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 2, 1),
            'makananCukup' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 2, 2),
            'makananSiap' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 2, 3),
            'akomodasiTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 3, 1),
            'akomodasiCukup' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 3, 2),
            'akomodasiSiap' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 3, 3),
        ];

        $skalaTingkat = [
            'mikroTidak' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 1, 1),
            'mikroCukup' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 1, 2),
            'mikroSiap' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 1, 3),
            'kecilTidak' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 2, 1),
            'kecilCukup' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 2, 2),
            'kecilSiap' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 2, 3),
        ];

        $jk = [
            'laki' => $this->uup-> getIKUPTIK('gender_pemilik_pengelola', 1),
            'perempuan' => $this->uup-> getIKUPTIK('gender_pemilik_pengelola', 2),
        ];

        $pendidikan = [
            'dasar' => $this->uup-> getIKUPTIK('kelompok_pendidikan', 1),
            'menengah' => $this->uup-> getIKUPTIK('kelompok_pendidikan', 2),
            'tinggi' => $this->uup-> getIKUPTIK('kelompok_pendidikan', 3),
        ];

        $jenis = [
            'transportasi' => $this->uup-> getIKUPTIK('jenis_usaha', 1),
            'makanan' => $this->uup-> getIKUPTIK('jenis_usaha', 2),
            'akomodasi' => $this->uup-> getIKUPTIK('jenis_usaha', 3),
        ];

        $skala = [
            'mikro' => $this->uup-> getIKUPTIK('skala_usaha', 1),
            'kecil' => $this->uup-> getIKUPTIK('skala_usaha', 2),
        ];

        $umurIKUPTIK = [
            'umur' => $this-> uup-> getUmur2(),
            'ikuptik' => $this-> uup-> getIKUPTIK2(),
        ];

        $ikuptik =[
            'ikuptik' =>  $this-> uup-> getIKUPTIK2(),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Karakteristik Kesiapan UUP',
            'menu' => $menu['riset4'],
            'jenisKelaminTingkat' => $jenisKelaminTingkat,
            'usiaTingkat' => $usiaTingkat,
            'pendidikanTingkat' => $pendidikanTingkat,
            'jenisUsahaTingkat' => $jenisUsahaTingkat,
            'skalaTingkat' => $skalaTingkat,
            'jk' => $jk,
            'pendidikan' => $pendidikan,
            'jenis' => $jenis,
            'skala' => $skala,
            'umurIKUPTIK' => $umurIKUPTIK,
            'ikuptik' => $ikuptik,
        ];
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup', $data);
    }

    public function deskripsi_singkat()
    {
        $ikuptikPerDimensi = [
            'dimensi1' => $this->uup->getRataanGeo('dimensi1'),
            'dimensi2' => $this->uup->getRataanGeo('dimensi2'),
            'dimensi3' => $this->uup->getRataanGeo('dimensi3'),
            'dimensi4' => $this->uup->getRataanGeo('dimensi4'),
            'dimensi5' => $this->uup->getRataanGeo('dimensi5'),
            'dimensi6' => $this->uup->getRataanGeo('dimensi6'),
        ];

        $total = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 1),
            'makan' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 3)
        ];

        $ikuptikKec = [
            'batu' =>  $this->uup->getRataanGeo2('kecamatan', 'geometrik_mean', 'BATU'),
            'junrejo' => $this->uup->getRataanGeo2('kecamatan', 'geometrik_mean', 'JUNREJO'),
            'bumiaji' => $this->uup->getRataanGeo2('kecamatan', 'geometrik_mean', 'BUMIAJI'),
        ];

        $ikuptikJenis = [
            'transportasi' =>  $this->uup->getRataanGeo2('jenis_usaha', 'geometrik_mean', 1),
            'makanan' => $this->uup->getRataanGeo2('jenis_usaha', 'geometrik_mean', 2),
            'akomodasi' => $this->uup->getRataanGeo2('jenis_usaha', 'geometrik_mean', 3),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Deskripsi Singkat',
            'menu' => $menu['riset4'],
            'ikuptikPerDimensi' => $ikuptikPerDimensi,
            'total' => $total,
            'ikuptikKec' => $ikuptikKec,
            'ikuptikJenis' => $ikuptikJenis
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/deskripsi_singkat', $data);
    }

    public function dimensi()
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
            'judul' => 'Dimensi',
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

    public function kecamatan()
    {
        $ikuptikPerDimensiBatu = [
            'dimensi1' => $this->uup->getRataanGeo2('kecamatan', 'dimensi1', 'BATU'),
            'dimensi2' => $this->uup->getRataanGeo2('kecamatan', 'dimensi2', 'BATU'),
            'dimensi3' => $this->uup->getRataanGeo2('kecamatan', 'dimensi3', 'BATU'),
            'dimensi4' => $this->uup->getRataanGeo2('kecamatan', 'dimensi4', 'BATU'),
            'dimensi5' => $this->uup->getRataanGeo2('kecamatan', 'dimensi5', 'BATU'),
            'dimensi6' => $this->uup->getRataanGeo2('kecamatan', 'dimensi6', 'BATU'),
        ];

        $ikuptikPerDimensiJunrejo = [
            'dimensi1' => $this->uup->getRataanGeo2('kecamatan', 'dimensi1', 'JUNREJO'),
            'dimensi2' => $this->uup->getRataanGeo2('kecamatan', 'dimensi2', 'JUNREJO'),
            'dimensi3' => $this->uup->getRataanGeo2('kecamatan', 'dimensi3', 'JUNREJO'),
            'dimensi4' => $this->uup->getRataanGeo2('kecamatan', 'dimensi4', 'JUNREJO'),
            'dimensi5' => $this->uup->getRataanGeo2('kecamatan', 'dimensi5', 'JUNREJO'),
            'dimensi6' => $this->uup->getRataanGeo2('kecamatan', 'dimensi6', 'JUNREJO'),
        ];

        $ikuptikPerDimensiBumiaji = [
            'dimensi1' => $this->uup->getRataanGeo2('kecamatan', 'dimensi1', 'BUMIAJI'),
            'dimensi2' => $this->uup->getRataanGeo2('kecamatan', 'dimensi2', 'BUMIAJI'),
            'dimensi3' => $this->uup->getRataanGeo2('kecamatan', 'dimensi3', 'BUMIAJI'),
            'dimensi4' => $this->uup->getRataanGeo2('kecamatan', 'dimensi4', 'BUMIAJI'),
            'dimensi5' => $this->uup->getRataanGeo2('kecamatan', 'dimensi5', 'BUMIAJI'),
            'dimensi6' => $this->uup->getRataanGeo2('kecamatan', 'dimensi6', 'BUMIAJI'),
        ];

        $q231_407a = [
            'q231_407a1' => $this->unitusahaTIK->getUnitUsahaTIK2(1),
            'q231_407a2' => $this->unitusahaTIK->getUnitUsahaTIK2(2),
            'q231_407a3' => $this->unitusahaTIK->getUnitUsahaTIK2(3),
            'q231_407a4' => $this->unitusahaTIK->getUnitUsahaTIK2(4),
        ];

        $kecamatan1_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 1, "BATU"),
            'makanminum' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 2, "BATU"),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 3, "BATU")
        ];

        $kecamatan2_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 1, "JUNREJO"),
            'makanminum' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 2, "JUNREJO"),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 3, "JUNREJO")
        ];

        $kecamatan3_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 1, "BUMIAJI"),
            'makanminum' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 2, "BUMIAJI"),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 3, "BUMIAJI")
        ];

        $menu = getMenu(); 
        $data = [
            'judul' => 'Kecamatan',
            'menu' => $menu['riset4'],
            'ikuptikPerDimensiBatu' => $ikuptikPerDimensiBatu,
            'ikuptikPerDimensiJunrejo' => $ikuptikPerDimensiJunrejo,
            'ikuptikPerDimensiBumiaji' => $ikuptikPerDimensiBumiaji,
            'q231_407a' => $q231_407a,
            'kecamatan1_jenis' => $kecamatan1_jenis,
            'kecamatan2_jenis' => $kecamatan2_jenis,
            'kecamatan3_jenis' => $kecamatan3_jenis,
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/kecamatan', $data);
    }

    public function jenis_unit_usaha()
    {
        $total = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 1),
            'makan' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 3)
        ];
        $transportasi = [
            'dimensi1' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 1),
            'dimensi2' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 1),
            'dimensi3' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 1),
            'dimensi4' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 1),
            'dimensi5' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 1),
            'dimensi6' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 1),
        ];
        $makan = [
            'dimensi1' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 2),
            'dimensi2' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 2),
            'dimensi3' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 2),
            'dimensi4' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 2),
            'dimensi5' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 2),
            'dimensi6' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 2),
        ];
        $akomodasi = [
            'dimensi1' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 3),
            'dimensi2' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 3),
            'dimensi3' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 3),
            'dimensi4' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 3),
            'dimensi5' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 3),
            'dimensi6' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 3),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Jenis Unit Usaha',
            'menu' => $menu['riset4'],
            'total' => $total,
            'transportasi' => $transportasi,
            'makan' => $makan,
            'akomodasi' => $akomodasi,
        ];
        return view('pvd/pages/dasbor/riset4/ikuptik/jenis_unit_usaha', $data);
    }

    public function faktor_pengaruh_ikuptik()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Faktor Pengaruh IKUPTIK',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/faktor_pengaruh_ikuptik', $data);
    }

    public function dokumen_terkait()
    {
        $menu = getMenu();
        $data = [
            'judul' => 'Dokumen Terkait',
            'menu' => $menu['riset4'],
        ];
        return view('pvd/pages/dasbor/riset4/dokumen_terkait', $data);
    }

    public function unduh_dasbor()
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
        ];


        $data1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data1);
        return view('pvd/pages/dasbor/riset4/index', $data);
    }

    public function unduh_pemilik_atau_pengelola_usaha_pariwisata()
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


        $data2_1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data2_1);
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemilik_atau_pengelola_usaha_pariwisata', $data);
    }

    public function unduh_unit_usaha_pariwisata()
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
            'judul' => 'Unit Usaha Pariwisata',
            'menu' => $menu['riset4'],
            'uupKotaBatuJenis' => $uupKotaBatuJenis,
            'uupKotaBatuSkala' => $uupKotaBatuSkala,
            'uupKotaBatuLokasi' => $uupKotaBatuLokasi,
            'uupKotaBatuJenisSkala' => $uupKotaBatuJenisSkala,
            'uupKotaBatuJenisLokasi' => $uupKotaBatuJenisLokasi,
            'uupKotaBatuSkalaLokasi' => $uupKotaBatuSkalaLokasi,
        ];

        $data2_2 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data2_2);
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/unit_usaha_pariwisata', $data);
    }

    public function unduh_pemanfaatan_tik()
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

        $data2_3 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data2_3);
        return view('pvd/pages/dasbor/riset4/karakteristik_umum_unit_usaha/pemanfaatan_tik', $data);
    }

    public function unduh_karakteristik_kesiapan_uup()
    {

        $jenisKelaminTingkat = [
            'lakiTidak' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 1, 1),
            'lakiCukup' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 1, 2),
            'lakiSiap' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 1, 3),
            'perempuanTidak' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 2, 1),
            'perempuanCukup' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 2, 2),
            'perempuanSiap' => $this->uup->getJumlahUUP2('gender_pemilik_pengelola', 'status_kesiapan', 2, 3),
        ];

        $usiaTingkat = [
            'k1Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 1, 1),
            'k1Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 1, 2),
            'k1Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 1, 3),
            'k2Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 2, 1),
            'k2Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 2, 2),
            'k2Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 2, 3),
            'k3Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 3, 1),
            'k3Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 3, 2),
            'k3Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 3, 3),
            'k4Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 4, 1),
            'k4Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 4, 2),
            'k4Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 4, 3),
            'k5Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 5, 1),
            'k5Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 5, 2),
            'k5Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 5, 3),
            'k6Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 6, 1),
            'k6Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 6, 2),
            'k6Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 6, 3),
            'k7Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 7, 1),
            'k7Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 7, 2),
            'k7Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 7, 3),
            'k8Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 8, 1),
            'k8Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 8, 2),
            'k8Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 8, 3),
            'k9Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 9, 1),
            'k9Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 9, 2),
            'k9Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 9, 3),
            'k10Tidak' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 10, 1),
            'k10Cukup' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 10, 2),
            'k10Siap' => $this->uup->getJumlahUUP2('kelompok_usia', 'status_kesiapan', 10, 3),
        ];

        $pendidikanTingkat = [
            'dasarTidak' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 1, 1),
            'dasarCukup' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 1, 2),
            'dasarSiap' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 1, 3),
            'menengahTidak' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 2, 1),
            'menengahCukup' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 2, 2),
            'menengahSiap' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 2, 3),
            'tinggiTidak' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 3, 1),
            'tinggiCukup' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 3, 2),
            'tinggiSiap' => $this->uup->getJumlahUUP2('kelompok_pendidikan', 'status_kesiapan', 3, 3),
        ];

        $jenisUsahaTingkat = [
            'transportasiTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 1, 1),
            'transportasiCukup' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 1, 2),
            'transportasiSiap' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 1, 3),
            'makananTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 2, 1),
            'makananCukup' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 2, 2),
            'makananSiap' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 2, 3),
            'akomodasiTidak' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 3, 1),
            'akomodasiCukup' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 3, 2),
            'akomodasiSiap' => $this->uup->getJumlahUUP2('jenis_usaha', 'status_kesiapan', 3, 3),
        ];

        $skalaTingkat = [
            'mikroTidak' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 1, 1),
            'mikroCukup' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 1, 2),
            'mikroSiap' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 1, 3),
            'kecilTidak' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 2, 1),
            'kecilCukup' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 2, 2),
            'kecilSiap' => $this->uup->getJumlahUUP2('skala_usaha', 'status_kesiapan', 2, 3),
        ];

        $jk = [
            'laki' => $this->uup-> getIKUPTIK('gender_pemilik_pengelola', 1),
            'perempuan' => $this->uup-> getIKUPTIK('gender_pemilik_pengelola', 2),
        ];

        $pendidikan = [
            'dasar' => $this->uup-> getIKUPTIK('kelompok_pendidikan', 1),
            'menengah' => $this->uup-> getIKUPTIK('kelompok_pendidikan', 2),
            'tinggi' => $this->uup-> getIKUPTIK('kelompok_pendidikan', 3),
        ];

        $jenis = [
            'transportasi' => $this->uup-> getIKUPTIK('jenis_usaha', 1),
            'makanan' => $this->uup-> getIKUPTIK('jenis_usaha', 2),
            'akomodasi' => $this->uup-> getIKUPTIK('jenis_usaha', 3),
        ];

        $skala = [
            'mikro' => $this->uup-> getIKUPTIK('skala_usaha', 1),
            'kecil' => $this->uup-> getIKUPTIK('skala_usaha', 2),
        ];

        $umurIKUPTIK = [
            'umur' => $this-> uup-> getUmur2(),
            'ikuptik' => $this-> uup-> getIKUPTIK2(),
        ];

        $ikuptik =[
            'ikuptik' =>  $this-> uup-> getIKUPTIK2(),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Karakteristik Kesiapan UUP',
            'menu' => $menu['riset4'],
            'jenisKelaminTingkat' => $jenisKelaminTingkat,
            'usiaTingkat' => $usiaTingkat,
            'pendidikanTingkat' => $pendidikanTingkat,
            'jenisUsahaTingkat' => $jenisUsahaTingkat,
            'skalaTingkat' => $skalaTingkat,
            'jk' => $jk,
            'pendidikan' => $pendidikan,
            'jenis' => $jenis,
            'skala' => $skala,
            'umurIKUPTIK' => $umurIKUPTIK,
            'ikuptik' => $ikuptik,
        ];

        $data3 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data3);
        return view('pvd/pages/dasbor/riset4/karakteristik_kesiapan_uup', $data);
    }

    public function unduh_deskripsi_singkat()
    {
        $ikuptikPerDimensi = [
            'dimensi1' => $this->uup->getRataanGeo('dimensi1'),
            'dimensi2' => $this->uup->getRataanGeo('dimensi2'),
            'dimensi3' => $this->uup->getRataanGeo('dimensi3'),
            'dimensi4' => $this->uup->getRataanGeo('dimensi4'),
            'dimensi5' => $this->uup->getRataanGeo('dimensi5'),
            'dimensi6' => $this->uup->getRataanGeo('dimensi6'),
        ];

        $total = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 1),
            'makan' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 3)
        ];

        $ikuptikKec = [
            'batu' =>  $this->uup->getRataanGeo2('kecamatan', 'geometrik_mean', 'BATU'),
            'junrejo' => $this->uup->getRataanGeo2('kecamatan', 'geometrik_mean', 'JUNREJO'),
            'bumiaji' => $this->uup->getRataanGeo2('kecamatan', 'geometrik_mean', 'BUMIAJI'),
        ];

        $ikuptikJenis = [
            'transportasi' =>  $this->uup->getRataanGeo2('jenis_usaha', 'geometrik_mean', 1),
            'makanan' => $this->uup->getRataanGeo2('jenis_usaha', 'geometrik_mean', 2),
            'akomodasi' => $this->uup->getRataanGeo2('jenis_usaha', 'geometrik_mean', 3),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Deskripsi Singkat',
            'menu' => $menu['riset4'],
            'ikuptikPerDimensi' => $ikuptikPerDimensi,
            'total' => $total,
            'ikuptikKec' => $ikuptikKec,
            'ikuptikJenis' => $ikuptikJenis
        ];


        $data4_1 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data4_1);
        return view('pvd/pages/dasbor/riset4/ikuptik/deskripsi_singkat', $data);
    }

    public function unduh_dimensi()
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
            'judul' => 'Dimensi',
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

        $data4_2 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data4_2);
        return view('pvd/pages/dasbor/riset4/ikuptik/dimensi', $data);
    }

    public function unduh_kecamatan()
    {
        $ikuptikPerDimensiBatu = [
            'dimensi1' => $this->uup->getRataanGeo2('kecamatan', 'dimensi1', 'BATU'),
            'dimensi2' => $this->uup->getRataanGeo2('kecamatan', 'dimensi2', 'BATU'),
            'dimensi3' => $this->uup->getRataanGeo2('kecamatan', 'dimensi3', 'BATU'),
            'dimensi4' => $this->uup->getRataanGeo2('kecamatan', 'dimensi4', 'BATU'),
            'dimensi5' => $this->uup->getRataanGeo2('kecamatan', 'dimensi5', 'BATU'),
            'dimensi6' => $this->uup->getRataanGeo2('kecamatan', 'dimensi6', 'BATU'),
        ];

        $ikuptikPerDimensiJunrejo = [
            'dimensi1' => $this->uup->getRataanGeo2('kecamatan', 'dimensi1', 'JUNREJO'),
            'dimensi2' => $this->uup->getRataanGeo2('kecamatan', 'dimensi2', 'JUNREJO'),
            'dimensi3' => $this->uup->getRataanGeo2('kecamatan', 'dimensi3', 'JUNREJO'),
            'dimensi4' => $this->uup->getRataanGeo2('kecamatan', 'dimensi4', 'JUNREJO'),
            'dimensi5' => $this->uup->getRataanGeo2('kecamatan', 'dimensi5', 'JUNREJO'),
            'dimensi6' => $this->uup->getRataanGeo2('kecamatan', 'dimensi6', 'JUNREJO'),
        ];

        $ikuptikPerDimensiBumiaji = [
            'dimensi1' => $this->uup->getRataanGeo2('kecamatan', 'dimensi1', 'BUMIAJI'),
            'dimensi2' => $this->uup->getRataanGeo2('kecamatan', 'dimensi2', 'BUMIAJI'),
            'dimensi3' => $this->uup->getRataanGeo2('kecamatan', 'dimensi3', 'BUMIAJI'),
            'dimensi4' => $this->uup->getRataanGeo2('kecamatan', 'dimensi4', 'BUMIAJI'),
            'dimensi5' => $this->uup->getRataanGeo2('kecamatan', 'dimensi5', 'BUMIAJI'),
            'dimensi6' => $this->uup->getRataanGeo2('kecamatan', 'dimensi6', 'BUMIAJI'),
        ];

        $q231_407a = [
            'q231_407a1' => $this->unitusahaTIK->getUnitUsahaTIK2(1),
            'q231_407a2' => $this->unitusahaTIK->getUnitUsahaTIK2(2),
            'q231_407a3' => $this->unitusahaTIK->getUnitUsahaTIK2(3),
            'q231_407a4' => $this->unitusahaTIK->getUnitUsahaTIK2(4),
        ];

        $kecamatan1_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 1, "BATU"),
            'makanminum' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 2, "BATU"),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 3, "BATU")
        ];

        $kecamatan2_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 1, "JUNREJO"),
            'makanminum' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 2, "JUNREJO"),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 3, "JUNREJO")
        ];

        $kecamatan3_jenis = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 1, "BUMIAJI"),
            'makanminum' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 2, "BUMIAJI"),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo3("jenis_usaha", "kecamatan", "geometrik_mean", 3, "BUMIAJI")
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Kecamatan',
            'menu' => $menu['riset4'],
            'ikuptikPerDimensiBatu' => $ikuptikPerDimensiBatu,
            'ikuptikPerDimensiJunrejo' => $ikuptikPerDimensiJunrejo,
            'ikuptikPerDimensiBumiaji' => $ikuptikPerDimensiBumiaji,
            'q231_407a' => $q231_407a,
            'kecamatan1_jenis' => $kecamatan1_jenis,
            'kecamatan2_jenis' => $kecamatan2_jenis,
            'kecamatan3_jenis' => $kecamatan3_jenis,
        ];

        $data4_3 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data4_3);
        return view('pvd/pages/dasbor/riset4/ikuptik/kecamatan', $data);
    }

    public function unduh_jenis_unit_usaha()
    {
        $total = [
            'transportasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 1),
            'makan' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 2),
            'akomodasi' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "geometrik_mean", 3)
        ];
        $transportasi = [
            'dimensi1' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 1),
            'dimensi2' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 1),
            'dimensi3' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 1),
            'dimensi4' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 1),
            'dimensi5' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 1),
            'dimensi6' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 1),
        ];
        $makan = [
            'dimensi1' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 2),
            'dimensi2' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 2),
            'dimensi3' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 2),
            'dimensi4' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 2),
            'dimensi5' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 2),
            'dimensi6' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 2),
        ];
        $akomodasi = [
            'dimensi1' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi1", 3),
            'dimensi2' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi2", 3),
            'dimensi3' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi3", 3),
            'dimensi4' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi4", 3),
            'dimensi5' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi5", 3),
            'dimensi6' => $this->unitusahaTIK->getRataanGeo2("jenis_usaha", "dimensi6", 3),
        ];

        $menu = getMenu();
        $data = [
            'judul' => 'Jenis Unit Usaha',
            'menu' => $menu['riset4'],
            'total' => $total,
            'transportasi' => $transportasi,
            'makan' => $makan,
            'akomodasi' => $akomodasi,
        ];

        $data4_4 = [
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'instansi' => $this->request->getVar('instansi')
        ];
        $this->datapengunduh->insert($data4_4);
        return view('pvd/pages/dasbor/riset4/ikuptik/jenis_unit_usaha', $data);
    }
}
