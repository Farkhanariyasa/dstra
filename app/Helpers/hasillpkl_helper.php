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
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset1/afdf',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset1/afgfx',
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
              'href' => '/riset1/ddfdxfbor',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset1/ddfdxf',
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
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset2/fgfx',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset2/fgfx',
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
              'href' => '/riset2/gfg',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset2/sdz',
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
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset3/dszdzs',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset3/dszds',
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
              'href' => '/riset3/dsdsz',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset3/ddzs',
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
          'href' => '#menu2',
          'id' => 'menu2',
          'subMenu' => [
            [
              'subMenu' => 'Submenu 1',
              'href' => '/riset4/sdszd',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset4/dszd',
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
              'href' => '/riset4/ads',
            ],
            [
              'subMenu' => 'Submenu 2',
              'href' => '/riset4/ar',
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