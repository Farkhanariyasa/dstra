<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// redirect link to landing page
$routes->get('/', 'Home::index');

// Hasil PKL
$routes->group('hasil-pkl', ['namespace' => 'App\Controllers\Pvd'], function ($routes) {
    // Autentikasi
    $routes->get('masuk', 'Auth::login');
    $routes->get('keluar', 'Auth::logout');
    $routes->get('loginstis', 'Auth::loginstis');
    $routes->get('loginmanual', 'Auth::loginmanual');
    $routes->post('loginmanual', 'Auth::loginmanual');

    // Landing Page
    $routes->get('/', 'LandingPage::index');
    $routes->group('(:segment)', ['namespace' => 'App\Controllers\Pvd'], function ($routes) {
        // Tentang Riset
        $routes->get('/', 'LandingPage::riset/$1');

        // Fungsi Unduh
        $routes->post('unduh', 'Tools::unduh/$1');
    });

    // Dasbor Riset 1
    $routes->group('riset1', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Dasbor
        $routes->get('dasbor', 'Riset1::index');
        $routes->get('mpd-statistikarelawansurabaya', 'Riset1::statistikarelawansurabaya');
        $routes->get('mpd-qualityassurance', 'Riset1::qualityassurance');
        $routes->get('mpd-doublecounting', 'Riset1::double_counting_evaluasi'); // double counting
        $routes->get('mpd-familygrouping', 'Riset1::family_grouping_evaluasi'); // Tabulasi
        // Wisata Nusantara
        $routes->get('wisnus-visualisasi', 'Riset1::wisnus_visualisasi'); // Visualisasi
        $routes->get('wisnus-tabulasi', 'Riset1::wisnus_tabulasi'); // Tabulasi
        // Kuesioner
        $routes->get('kuesioner-sby', 'Riset1::kuesioner_sby'); // Surabaya
        $routes->get('kuesioner-malang', 'Riset1::kuesioner_malang'); // Malang

        // Unduh
        $routes->post('dasbor', 'Riset1::unduhdasbor');
        $routes->post('mpd-statistikarelawansurabaya', 'Riset1::unduhstatsrelawansby');
        $routes->post('mpd-qualityassurance', 'Riset1::unduhqa');
        $routes->post('mpd-doublecounting', 'Riset1::unduhdc');
        $routes->post('mpd-familygrouping', 'Riset1::unduhfg');
        $routes->post('wisnus-visualisasi', 'Riset1::unduhwisnus');
    });
    // Dasbor Riset 2
    $routes->group('riset2', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Dasbor
        $routes->get('dasbor', 'Riset2::index');
        // Tujuan 1
        $routes->get('tujuan1-hasil1', 'Riset2::tujuan1_hasil1'); // Hasil 1
        $routes->get('tujuan1-hasil2', 'Riset2::tujuan1_hasil2'); // Hasil 2
        $routes->get('tujuan1-hasil3', 'Riset2::tujuan1_hasil3'); // Hasil 3
        $routes->get('tujuan1-tabulasi', 'Riset2::tujuan1_tabulasi'); // Tabulasi
        // Tujuan 2
        $routes->get('tujuan2-hasil1', 'Riset2::tujuan2_hasil1'); // Hasil 1
        $routes->get('tujuan2-hasil2', 'Riset2::tujuan2_hasil2'); // Hasil 2
        $routes->get('tujuan2-tabulasi', 'Riset2::tujuan2_tabulasi'); // Tabulasi
        // Tujuan 3
        $routes->get('tujuan3-hasil1', 'Riset2::tujuan3_hasil1'); // Hasil 1
        $routes->get('tujuan3-hasil2', 'Riset2::tujuan3_hasil2'); // Hasil 2
        $routes->get('tujuan3-tabulasi', 'Riset2::tujuan3_tabulasi'); // Tabulasi
        // Tujuan 4
        $routes->get('tujuan4-hasil1', 'Riset2::tujuan4_hasil1'); // Hasil 1
        $routes->get('tujuan4-hasil2', 'Riset2::tujuan4_hasil2'); // Hasil 2
        $routes->get('tujuan4-tabulasi', 'Riset2::tujuan4_tabulasi'); // Tabulasi
    });
    // Dasbor Riset 3
    $routes->group('riset3', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Menu 1
        $routes->get('dasbor', 'Riset3::index');
        // Menu 2
        $routes->get('hasilkajian1', 'Riset3::hasilkajian1');
        $routes->get('hasilkajian2', 'Riset3::hasilkajian2');
        $routes->get('hasilkajian3', 'Riset3::hasilkajian3');
        $routes->get('hasilkajian4', 'Riset3::hasilkajian4');

        $routes->post('hasilkajian1', 'Riset3::unduhtujuan1');
        $routes->post('hasilkajian2', 'Riset3::unduhtujuan2');
        $routes->post('hasilkajian3', 'Riset3::unduhtujuan3');
        $routes->post('hasilkajian4', 'Riset3::unduhtujuan4');

        // Menu 3
        $routes->get('kuesioner', 'Riset3::kuesioner');
        $routes->get('bukupedoman', 'Riset3::bukupedoman');
    });
    // Dasbor Riset 4
    $routes->group('riset4', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Menu 1
        $routes->get('dasbor', 'Riset4::index');

        $routes->post('dasbor', 'Riset4::unduh_dasbor');

        // Menu 2
        $routes->get('pemilik_atau_pengelola_usaha_pariwisata', 'Riset4::pemilik_atau_pengelola_usaha_pariwisata'); // Menu 2 Submenu 1
        $routes->get('unit_usaha_pariwisata', 'Riset4::unit_usaha_pariwisata'); // Menu 2 Submenu 2
        $routes->get('pemanfaatan_tik', 'Riset4::pemanfaatan_tik'); // Menu 2 Submenu 3

        $routes->post('pemilik_atau_pengelola_usaha_pariwisata', 'Riset4::unduh_pemilik_atau_pengelola_usaha_pariwisata'); // Menu 2 Submenu 1
        $routes->post('unit_usaha_pariwisata', 'Riset4::unduh_unit_usaha_pariwisata'); // Menu 2 Submenu 2
        $routes->post('pemanfaatan_tik', 'Riset4::unduh_pemanfaatan_tik'); // Menu 2 Submenu 3

        // Menu 3
        $routes->get('karakteristik_kesiapan_uup', 'Riset4::karakteristik_kesiapan_uup'); // Menu 3

        $routes->post('karakteristik_kesiapan_uup', 'Riset4::unduh_karakteristik_kesiapan_uup'); // Menu 3

        // Menu 4
        $routes->get('deskripsi_singkat', 'Riset4::deskripsi_singkat'); // Menu 4 Submenu 1
        $routes->get('dimensi', 'Riset4::dimensi'); // Menu 4 Submenu 2
        $routes->get('kecamatan', 'Riset4::kecamatan'); // Menu 4 Submenu 3
        $routes->get('jenis_unit_usaha', 'Riset4::jenis_unit_usaha'); // Menu 4 Submenu 4

        $routes->post('deskripsi_singkat', 'Riset4::unduh_deskripsi_singkat'); // Menu 4 Submenu 1
        $routes->post('dimensi', 'Riset4::unduh_dimensi'); // Menu 4 Submenu 2
        $routes->post('kecamatan', 'Riset4::unduh_kecamatan'); // Menu 4 Submenu 3
        $routes->post('jenis_unit_usaha', 'Riset4::unduh_jenis_unit_usaha'); // Menu 4 Submenu 4

        // Menu 5
        $routes->get('faktor_pengaruh_ikuptik', 'Riset4::faktor_pengaruh_ikuptik'); // Menu 5

        // Menu 6
        $routes->get('dokumen_terkait', 'Riset4::dokumen_terkait'); // Menu 6
    });
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
