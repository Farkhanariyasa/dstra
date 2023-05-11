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
          'icon' => 'fa-solid fa-chart-simple',
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
              'subMenu' => 'Lama Kunjungan',
              'href' => '/riset2/tujuan2-hasil1',
            ],
            [
              'subMenu' => 'Lama Perjalanan',
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
          'href' => '/riset2/tujuan4',
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
            [
              'subMenu' => 'Template visualisasi',
              'href' => '/riset3/tempviz',
            ],
            [
              'subMenu' => 'Tujuan 1',
              'href' => '/riset3/hasilkajian1',
            ],
            [
              'subMenu' => 'Tujuan 2',
              'href' => '/riset3/hasilkajian2',
            ],
            [
              'subMenu' => 'Tujuan 3',
              'href' => '/riset3/hasilkajian3',
            ],
            [
              'subMenu' => 'Tujuan 4',
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
          'menu' => 'Karakteristik Umum Unit Usaha',
          'icon' => 'fa-solid fa-shop',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Pemilik atau Pengelola Usaha Pariwisata',
              'href' => '/riset4/pemilik_atau_pengelola_usaha_pariwisata',
            ],
            [
              'subMenu' => 'Usaha Pariwisata',
              'href' => '/riset4/usaha_pariwisata',
            ],
            [
              'subMenu' => 'Pemanfaatan TIK',
              'href' => '/riset4/pemanfaatan_tik',
            ],
          ],
        ],
        [
          'menu' => 'Karakteristik Kesiapan UUP',
          'icon' => 'fa-solid fa-list-check',
          'href' => '#menu3',
          'id' => 'menu3',
          'subMenu' => [
            [
              'subMenu' => 'Infrastruktur dan Konektivitas',
              'href' => '/riset4/infrastruktur_dan_konektivitas',
            ],
            [
              'subMenu' => 'Penggunaan TIK',
              'href' => '/riset4/penggunaan_tik',
            ],
            [
              'subMenu' => 'Sumber Daya Manusia',
              'href' => '/riset4/sumber_daya_manusia',
            ],
            [
              'subMenu' => 'Manajemen Organisasi',
              'href' => '/riset4/manajemen_organisasi',
            ],
            [
              'subMenu' => 'Kesiapan Lingkungan Eksternal',
              'href' => '/riset4/kesiapan_lingkungan_eksternal',
            ],
            [
              'subMenu' => 'Kendala dalam Pemanfaatan TIK',
              'href' => '/riset4/kendala_dalam_pemanfaatan_tik',
            ],
          ],
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
          'menu' => 'Tentang Riset 4',
          'icon' => 'fas fa-chevron-circle-left',
          'href' => '/riset4'
        ],
      ],
    ];

  return $menu;
}
