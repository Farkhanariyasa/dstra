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
          'icon' => 'fas fa-newspaper',
          'href' => '/riset1/dasbor',
        ],
        [
          'menu' => 'Double Counting',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Visualisasi',
              'href' => '/riset1/menu2submenu1',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset1/menu2submenu2',
            ],
          ],
        ],
        [
          'menu' => 'Family Grouping',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu3',
          'id' => 'menu3',
          'subMenu' => [
            [
              'subMenu' => 'Visualisasi',
              'href' => '/riset1/menu3submenu1',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset1/menu3submenu2',
            ],
          ],
        ],
        [
          'menu' => 'Stastistik Wisata Nusantara',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu4',
          'id' => 'menu4',
          'subMenu' => [
            [
              'subMenu' => 'Visualisasi',
              'href' => '/riset1/menu4submenu1',
            ],
            [
              'subMenu' => 'Tabulasi',
              'href' => '/riset1/menu4submenu2',
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
          'menu' => 'Hasil Penelitian',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Kajian 1',
              'href' => '/riset2/menu2submenu1',
            ],
            [
              'subMenu' => 'Kajian 2',
              'href' => '/riset2/menu2submenu2',
            ],
            [
              'subMenu' => 'Kajian 3',
              'href' => '/riset2/menu2submenu3',
            ],
            [
              'subMenu' => 'Kajian 4',
              'href' => '/riset2/menu2submenu4',
            ],

          ],
        ],
        [
          'menu' => 'Tabel Dinamis',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu3',
          'id' => 'menu3',
          'subMenu' => [
            [
              'subMenu' => 'Kajian 1',
              'href' => '/riset2/menu3submenu1',
            ],
            [
              'subMenu' => 'Kajian 2',
              'href' => '/riset2/menu3submenu2',
            ],
            [
              'subMenu' => 'Kajian 3',
              'href' => '/riset2/menu3submenu3',
            ],
            [
              'subMenu' => 'Kajian 4',
              'href' => '/riset2/menu3submenu4',
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
          'icon' => 'fas fa-binoculars',
          'href' => '#hasilkajian',
          'id' => 'hasilkajian',
          'subMenu' => [
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
          'icon' => 'fas fa-binoculars',
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
          'icon' => 'fas fa-newspaper',
          'href' => '/riset4/dasbor',
        ],
        [
          'menu' => 'Kartkteristik Umum Unit Usaha',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Pemilik atau Pengelola Usaha Pariwisata',
              'href' => '/riset4/menu2submenu1',
            ],
            [
              'subMenu' => 'Usaha Pariwisata',
              'href' => '/riset4/menu2submenu2',
            ],
            [
              'subMenu' => 'Pemanfaatan TIK',
              'href' => '/riset4/menu2submenu3',
            ],
          ],
        ],
        [
          'menu' => 'Karakteristik Kesiapan Unit Usaha Pariwisata',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu3',
          'id' => 'menu3',
          'subMenu' => [
            [
              'subMenu' => 'Infrastruktur dan Konektivitas',
              'href' => '/riset4/menu3submenu1',
            ],
            [
              'subMenu' => 'Penggunaan TIK',
              'href' => '/riset4/menu3submenu2',
            ],
            [
              'subMenu' => 'Sumber Daya Manusia',
              'href' => '/riset4/menu3submenu3',
            ],
            [
              'subMenu' => 'Manajemen Organisasi',
              'href' => '/riset4/menu3submenu4',
            ],
            [
              'subMenu' => 'Kesiapan Lingkungan Eksternal',
              'href' => '/riset4/menu3submenu5',
            ],
            [
              'subMenu' => 'Kendala dalam Pemanfaatan TIK',
              'href' => '/riset4/menu3submenu6',
            ],
          ],
        ],
        [
          'menu' => 'Indeks Kesiapan Unit Usaha',
          'icon' => 'fas fa-chevron-circle-left',
          'href' => '/riset4'
        ],
      ],
    ];

  return $menu;
}
