<?php

function getMenu()
{
  $menu =
    [
      // Menu Riset 1
      'riset1' =>
      [
        [
          'menu' => 'Beranda',
          'icon' => 'fa fa-home',
          'href' => '/beranda',
        ],
        [
          'menu' => 'Dasbor Utama',
          'icon' => 'fas fa-newspaper',
          'href' => '/riset1/dasbor',
        ],
        [
          'menu' => 'Menu 2',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset1/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset1/dasbor',
            ],
          ],
        ],
        [
          'menu' => 'Menu 3',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset1/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset1/dasbor',
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
          'menu' => 'Beranda',
          'icon' => 'fa fa-home',
          'href' => '/beranda',
        ],
        [
          'menu' => 'Dasbor Utama',
          'icon' => 'fas fa-newspaper',
          'href' => '/riset2/dasbor',
        ],
        [
          'menu' => 'Menu 2',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset2/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset2/dasbor',
            ],
          ],
        ],
        [
          'menu' => 'Menu 3',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset2/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset2/dasbor',
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
          'menu' => 'Beranda',
          'icon' => 'fa fa-home',
          'href' => '/beranda',
        ],
        [
          'menu' => 'Dasbor Utama',
          'icon' => 'fas fa-newspaper',
          'href' => '/riset3/dasbor',
        ],
        [
          'menu' => 'Menu 2',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset3/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset3/dasbor',
            ],
          ],
        ],
        [
          'menu' => 'Menu 3',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset3/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset3/dasbor',
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
          'menu' => 'Beranda',
          'icon' => 'fa fa-home',
          'href' => '/beranda',
        ],
        [
          'menu' => 'Dasbor Utama',
          'icon' => 'fas fa-newspaper',
          'href' => '/riset4/dasbor',
        ],
        [
          'menu' => 'Menu 2',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset4/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset4/dasbor',
            ],
          ],
        ],
        [
          'menu' => 'Menu 3',
          'icon' => 'fas fa-binoculars',
          'href' => '#',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset4/dasbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset4/dasbor',
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
