<?php $request = \Config\Services::request(); ?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="<?= base_url('hasil-pkl/beranda'); ?>"><img src="<?= base_url('pvd/img/logo_dasbor_max.png'); ?>" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="<?= base_url('hasil-pkl/beranda'); ?>"><img src="<?= base_url('pvd/img/logoPKL.png'); ?>" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-left">
      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset1/dasbor'); ?>" class="nav-link  <?= $request->uri->getSegment(2) == "riset1" ? "active" : "" ?>">
          Riset 1
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset2/dasbor'); ?>" class="nav-link <?= $request->uri->getSegment(2) == "riset2" ? "active" : "" ?>">
          Riset 2
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset3/dasbor'); ?>" class="nav-link <?= $request->uri->getSegment(2) == "riset3" ? "active" : "" ?>">
          Riset 3
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" class="nav-link <?= $request->uri->getSegment(2) == "riset4" ? "active" : "" ?>">
          Riset 4
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>