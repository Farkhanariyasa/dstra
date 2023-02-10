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
              'subMenu' => 'Grafik',
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
              'subMenu' => 'Grafik',
              'href' => '/riset1/menu3submenu1',
            ],
            [
              'subMenu' => 'Kuesioner',
              'href' => '/riset1/menu3submenu2',
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
          'menu' => 'Gambaran Umum',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Deskripsi Umum',
              'href' => '/riset2/menu2submenu1',
            ],
            [
              'subMenu' => 'Kuesioner',
              'href' => '/riset2/menu2submenu2',
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
              'subMenu' => 'Tabel',
              'href' => '/riset2/menu3submenu1',
            ],
            [
              'subMenu' => 'Kajian 2',
              'href' => '/riset2/menu3submenu2',
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
          'menu' => 'Menu 2',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset3/menu2submenu1',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset3/menu2submenu2',
            ],
          ],
        ],
        [
          'menu' => 'Menu 3',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu3',
          'id' => 'menu3',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset3/menu3submenu1',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset3/menu3submenu2',
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
          'menu' => 'Unit Usaha',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Karakteristik Umum',
              'href' => '/riset4/menu2submenu1',
            ],
            [
              'subMenu' => 'Karakteristik Kesiapan',
              'href' => '/riset4/menu2submenu2',
            ],
            [
              'subMenu' => 'Indeks Kesiapan',
              'href' => '/riset4/menu2submenu3',
            ],
          ],
        ],
        [
          'menu' => 'Menu 3',
          'icon' => 'fas fa-binoculars',
          'href' => '#menu3',
          'id' => 'menu3',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset4/menu3submenu1',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset4/menu3submenu2',
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
