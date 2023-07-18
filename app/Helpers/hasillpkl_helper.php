<?php

function getMenu()
{
  $menu =
    [
      // Menu Riset 1
      'riset1' =>
      [
        [
          'menu' => 'Dasbor',
          'icon' => 'fa-solid fa-chart-simple',
          'href' => '/riset1/dasbor',
        ],
        [
          'menu' => 'Mobile Positioning Data (MPD)',
          'icon' => 'fa-solid fa-mobile-screen-button',
          'href' => '#menu1',
          'id' => 'menu1',
          'subMenu' => [
            [
              'subMenu' => 'Statistik Relawan Surabaya',
              'href' => '/riset1/mpd-statistikarelawansurabaya',
            ],
            [
              'subMenu' => 'Quality Assurance',
              'href' => '/riset1/mpd-qualityassurance',
            ],
            [
              'subMenu' => 'Double Counting',
              'href' => '/riset1/mpd-doublecounting',
            ],
            [
              'subMenu' => 'Family Grouping',
              'href' => '/riset1/mpd-familygrouping',
            ],
          ],

        ],
        [
          'menu' => 'Stastistik Wisatawan Nusantara',
          'icon' => 'fas fa-hotel',
          'href' => '#menu4',
          'id' => 'menu4',
          'subMenu' => [
            [
              'subMenu' => 'Visualisasi',
              'href' => '/riset1/wisnus-visualisasi',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset1/wisnus-tabulasi',
            ],
          ],
        ],
        [
          'menu' => 'Kuesioner',
          'icon' => '	fas fa-file-alt',
          'href' => '#menu5',
          'id' => 'menu5',
          'subMenu' => [
            [
              'subMenu' => 'Kota Surabaya',
              'href' => '/riset1/kuesioner-sby',
            ],
            [
              'subMenu' => 'Kota Malang',
              'href' => '/riset1/kuesioner-malang',
            ],
          ],
        ],
        [
          'menu' => 'Tentang Riset 1',
          'icon' => 'fas fa-chevron-circle-left',
          'href' => '/riset1'
        ],
      ],
      // Menu Riset 2
      'riset2' =>
      [
        [
          'menu' => 'Dasbor',
          'icon' => 'fas fa-newspaper',
          'href' => '/riset2/dasbor',
        ],
        [
          'menu' => 'Estimasi Banyak Wisatawan & Perjalanan Wisata',
          'icon' => 'fas fa-map-location-dot',
          'href' => '#tujuan1',
          'id' => 'tujuan1',
          'subMenu' => [
            [
              'subMenu' => 'Estimasi Banyak Wisatawan',
              'href' => '/riset2/tujuan1-hasil1',
            ],
            [
              'subMenu' => 'Estimasi Banyak Perjalanan',
              'href' => '/riset2/tujuan1-hasil2',
            ],
            [
              'subMenu' => 'Kategori Perjalanan',
              'href' => '/riset2/tujuan1-hasil3',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset2/tujuan1-tabulasi',
            ],
          ],
        ],
        [
          'menu' => 'Lama Kunjungan & Lama Bepergian Wisata',
          'icon' => 'fas fa-calendar-week',
          'href' => '#tujuan2',
          'id' => 'tujuan2',
          'subMenu' => [
            [
              'subMenu' => 'Lama Kunjungan dan Bepergian Turis',
              'href' => '/riset2/tujuan2-hasil1',
            ],
            [
              'subMenu' => 'Lama Kunjungan dan Bepergian Pelancong',
              'href' => '/riset2/tujuan2-hasil2',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset2/tujuan2-tabulasi',
            ],
          ],
        ],
        [
          'menu' => 'Karakteristik Wisatawan & Perjalanan Wisata',
          'icon' => 'fas fa-person-walking-luggage',
          'href' => '#tujuan3',
          'id' => 'tujuan3',
          'subMenu' => [
            [
              'subMenu' => 'Karakteristik Wisatawan',
              'href' => '/riset2/tujuan3-hasil1',
            ],
            [
              'subMenu' => 'Karakteristik Perjalanan',
              'href' => '/riset2/tujuan3-hasil2',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset2/tujuan3-tabulasi',
            ],
          ],
        ],
        [
          'menu' => 'Analisis Inferensia',
          'icon' => 'fas fa-chart-simple',
          'href' => '#tujuan4',
          'id' => 'tujuan4',
          'subMenu' => [
            [
              'subMenu' => 'Model Zero-Inflation ZINB',
              'href' => '/riset2/tujuan4-hasil1',
            ],
            [
              'subMenu' => 'Model Count ZINB',
              'href' => '/riset2/tujuan4-hasil2',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset2/tujuan4-tabulasi',
            ],
          ],
        ],
        [
          'menu' => 'Tentang Riset 2',
          'icon' => 'fas fa-chevron-circle-left',
          'href' => '/riset2'
        ],
      ],
      // Menu Riset 3
      'riset3' =>
      [
        [
          'menu' => 'Dasbor',
          'icon' => 'fas fa-newspaper',
          'href' => '/riset3/dasbor',
        ],
        [
          'menu' => 'Hasil Kajian',
          'icon' => 'fas fa-chart-pie',
          'href' => '#hasilkajian',
          'id' => 'hasilkajian',
          'subMenu' => [
            // [
            //   'subMenu' => 'Template visualisasi',
            //   'href' => '/riset3/tempviz',
            // ],
            [
              'subMenu' => 'Gambaran sosiodemografi dan kualitas tenaga kerja di industri pariwisata',
              'href' => '/riset3/hasilkajian1',
            ],
            [
              'subMenu' => 'Dinamika tenaga kerja di industri pariwisata',
              'href' => '/riset3/hasilkajian2',
            ],
            [
              'subMenu' => 'Faktor-faktor yang memengaruhi jam kerja tenaga kerja lokal di industri pariwisata',
              'href' => '/riset3/hasilkajian3',
            ],
            [
              'subMenu' => 'Tingkat sadar wisata dari tenaga kerja industri pariwisata',
              'href' => '/riset3/hasilkajian4',
            ],
          ],
        ],
        [
          'menu' => 'Dokumen',
          'icon' => 'fas fa-file-alt',
          'href' => '#dokumen',
          'id' => 'dokumen',
          'subMenu' => [
            [
              'subMenu' => 'Kuesioner',
              'href' => '/riset3/kuesioner',
            ],
            [
              'subMenu' => 'Buku Pedoman',
              'href' => '/riset3/bukupedoman',
            ],
          ],
        ],
        [
          'menu' => 'Tentang Riset 3',
          'icon' => 'fas fa-chevron-circle-left',
          'href' => '/riset3'
        ],
      ],
      // Menu Riset 4
      'riset4' =>
      [
        [
          'menu' => 'Dasbor',
          'icon' => 'fa-solid fa-chart-simple',
          'href' => '/riset4/dasbor',
        ],
        [
          'menu' => 'Gambaran Umum Unit Usaha',
          'icon' => 'fa-solid fa-shop',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Pemilik atau Pengelola Usaha Pariwisata',
              'href' => '/riset4/pemilik_atau_pengelola_usaha_pariwisata',
            ],
            [
              'subMenu' => 'Unit Usaha Pariwisata',
              'href' => '/riset4/unit_usaha_pariwisata',
            ],
            [
              'subMenu' => 'Pemanfaatan TIK',
              'href' => '/riset4/pemanfaatan_tik',
            ],
          ],
        ],
        [
          'menu' => 'Karakteristik Indeks Kesiapan UUP',
          'icon' => 'fa-solid fa-list-check',
          'href' => '/riset4/karakteristik_kesiapan_uup',
        ],
        [
          'menu' => 'IKUPTIK',
          'icon' => 'fa-solid fa-calculator',
          'href' => '#menu4',
          'id' => 'menu4',
          'subMenu' => [
            [
              'subMenu' => 'Deskripsi Singkat',
              'href' => '/riset4/deskripsi_singkat',
            ],
            [
              'subMenu' => 'Dimensi',
              'href' => '/riset4/dimensi',
            ],
            [
              'subMenu' => 'Kecamatan',
              'href' => '/riset4/kecamatan',
            ],
            [
              'subMenu' => 'Jenis Unit Usaha',
              'href' => '/riset4/jenis_unit_usaha',
            ],
          ],
        ],
        [
          'menu' => 'Faktor-faktor Pengaruh IKUPTIK',
          'icon' => 'fa-solid fa-chart-line',
          'href' => '/riset4/faktor_pengaruh_ikuptik',
        ],
        [
          'menu' => 'Dokumen Terkait',
          'icon' => 'fa-solid fa-book',
          'href' => '/riset4/dokumen_terkait',
        ],
        [
          'menu' => 'Tentang Riset 4',
          'icon' => 'fas fa-chevron-circle-left',
          'href' => '/riset4'
        ],
      ],
    ];

  return $menu;
}
