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
        // Double Counting
        $routes->get('doublecounting-steps', 'Riset1::double_counting_steps'); // Steps
        $routes->get('doublecounting-evaluasi', 'Riset1::double_counting_evaluasi'); // Evaluasi
        // Family Grouping
        $routes->get('familygrouping-steps', 'Riset1::family_grouping_steps'); // Visualisasi
        $routes->get('familygrouping-evaluasi', 'Riset1::family_grouping_evaluasi'); // Tabulasi
        // Wisata Nusantara
        $routes->get('wisnus-visualisasi', 'Riset1::wisnus_visualisasi'); // Visualisasi
        $routes->get('wisnus-tabulasi', 'Riset1::wisnus_tabulasi'); // Tabulasi
        // Kuesioner
        $routes->get('kuesioner-sby', 'Riset1::kuesioner_sby'); // Surabaya
        $routes->get('kuesioner-malang', 'Riset1::kuesioner_malang'); // Malang


        // python script
        $routes->get('python-script', 'Riset1::python_script');
    });
    // Dasbor Riset 2
    $routes->group('riset2', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Menu 1
        $routes->get('dasbor', 'Riset2::index');
        // Menu 2
        $routes->get('hasil-kajian1', 'Riset2::hasil_kajian1'); // Hasil Kajian 1
        $routes->get('hasil-kajian2', 'Riset2::hasil_kajian2'); // Hasil Kajian 2
        $routes->get('hasil-kajian3', 'Riset2::hasil_kajian3'); // Hasil Kajian 3
        $routes->get('hasil-kajian4', 'Riset2::hasil_kajian4'); // Hasil Kajian 4
        // Menu 3
        $routes->get('tabel-kajian1', 'Riset2::tabel_kajian1'); // Tabel Kajian 1
        $routes->get('tabel-kajian2', 'Riset2::tabel_kajian2'); // Tabel Kajian 2
        $routes->get('tabel-kajian3', 'Riset2::tabel_kajian3'); // Tabel Kajian 3
        $routes->get('tabel-kajian4', 'Riset2::tabel_kajian4'); // Tabel Kajian 4
    });
    // Dasbor Riset 3
    $routes->group('riset3', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Menu 1
        $routes->get('dasbor', 'Riset3::index');
        $routes->get('tempviz', 'Riset3::tempviz');
        // Menu 2
        $routes->get('hasilkajian1', 'Riset3::hasilkajian1'); // Hasil Kajian Tujuan 1
        $routes->get('hasilkajian2', 'Riset3::hasilkajian2'); // Hasil Kajian Tujuan 2
        $routes->get('hasilkajian3', 'Riset3::hasilkajian3'); // Hasil Kajian Tujuan 3
        $routes->get('hasilkajian4', 'Riset3::hasilkajian4'); // Hasil Kajian Tujuan 4
        // Menu 3
        $routes->get('kuesioner', 'Riset3::kuesioner'); // Menu 3 Submenu 1
        $routes->get('bukupedoman', 'Riset3::bukupedoman'); // Menu 3 Submenu 2
    });
    // Dasbor Riset 4
    $routes->group('riset4', ['namespace' => 'App\Controllers\Pvd\Dasbor'], function ($routes) {
        // Menu 1
        $routes->get('dasbor', 'Riset4::index');
        // Menu 2
        $routes->get('pemilik_atau_pengelola_usaha_pariwisata', 'Riset4::menu2submenu1'); // Menu 2 Submenu 1
        $routes->get('usaha_pariwisata', 'Riset4::menu2submenu2'); // Menu 2 Submenu 2
        $routes->get('pemanfaatan_tik', 'Riset4::menu2submenu3'); // Menu 2 Submenu 3
        // Menu 3
        $routes->get('infrastruktur_dan_konektivitas', 'Riset4::menu3submenu1'); // Menu 3 Submenu 1
        $routes->get('penggunaan_tik', 'Riset4::menu3submenu2'); // Menu 3 Submenu 2
        $routes->get('sumber_daya_manusia', 'Riset4::menu3submenu3'); // Menu 3 Submenu 3
        $routes->get('manajemen_organisasi', 'Riset4::menu3submenu4'); // Menu 3 Submenu 4
        $routes->get('kesiapan_lingkungan_eksternal', 'Riset4::menu3submenu5'); // Menu 3 Submenu 5
        $routes->get('kendala_dalam_pemanfaatan_tik', 'Riset4::menu3submenu6'); // Menu 3 Submenu 6
        // Menu 4
        $routes->get('deskripsi_singkat', 'Riset4::menu4submenu1'); // Menu 4 Submenu 1
        $routes->get('dimensi', 'Riset4::menu4submenu2'); // Menu 4 Submenu 2
        $routes->get('kecamatan', 'Riset4::menu4submenu3'); // Menu 4 Submenu 3
        $routes->get('jenis_unit_usaha', 'Riset4::menu4submenu4'); // Menu 4 Submenu 4

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
