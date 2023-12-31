<?php $request = \Config\Services::request(); ?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="<?= base_url('hasil-pkl'); ?>"><img src="<?= base_url('pvd/img/dasbor/logo_dasbor_max.png'); ?>" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="<?= base_url('hasil-pkl'); ?>"><img src="<?= base_url('pvd/img/logo_pkl.png'); ?>" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-left">

      <li class="nav-item dropdown d-lg-none">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">
          <?= 'Riset ' . substr($request->getUri()->getSegment(2), -1) ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
          <a class="dropdown-item preview-item <?= $request->getUri()->getSegment(2) == "riset1" ? "active" : "" ?>" href="<?= base_url('hasil-pkl/riset1/dasbor'); ?>" data-bs-toggle="tooltip" title="Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata">
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Riset 1</h6>
            </div>
          </a>
          <a class="dropdown-item preview-item <?= $request->getUri()->getSegment(2) == "riset2" ? "active" : "" ?>" href="<?= base_url('hasil-pkl/riset2/dasbor'); ?>" data-bs-toggle="tooltip" title="Pilot Survei Wisatawan Nusantara">
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Riset 2</h6>
            </div>
          </a>
          <a class="dropdown-item preview-item <?= $request->getUri()->getSegment(2) == "riset3" ? "active" : "" ?>" href="<?= base_url('hasil-pkl/riset3/dasbor'); ?>" data-bs-toggle="tooltip" title="Tenaga Kerja di Industri Pariwisata">
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Riset 3</h6>
            </div>
          </a>
          <a class="dropdown-item preview-item <?= $request->getUri()->getSegment(2) == "riset4" ? "active" : "" ?>" href="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" data-bs-toggle="tooltip" title="Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan Smart TogetUri()sm Destination">
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Riset 4</h6>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset1/dasbor'); ?>" class="nav-link  <?= $request->getUri()->getSegment(2) == "riset1" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata">
          Riset 1
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset2/dasbor'); ?>" class="nav-link <?= $request->getUri()->getSegment(2) == "riset2" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Pilot Survei Wisatawan Nusantara">
          Riset 2
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset3/dasbor'); ?>" class="nav-link <?= $request->getUri()->getSegment(2) == "riset3" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Tenaga Kerja di Industri Pariwisata">
          Riset 3
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" class="nav-link <?= $request->getUri()->getSegment(2) == "riset4" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan Smart TogetUri()sm Destination">
          Riset 4
        </a>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="<?= session()->get('akun_picture') ?>" alt="image">
          </div>
          <div class="nav-profile-text">
            <p class="mb-1"><?= session()->get('akun_nama_lengkap') ?> </p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="<?= base_url('hasil-pkl') ?>">
            <i class="mdi mdi-home me-2"></i> Beranda </a>
          <hr class="dropdown-divider" />
          <?php if (session()->get('url_logout')) : ?>
            <script>
              var url = "<?= base_url('hasil-pkl/keluar') ?>";
            </script>
            <a class="dropdown-item" href="<?= session()->get('url_logout') ?>" onclick="window.open(url)">
              <i class="mdi mdi-logout me-2"></i> Keluar </a>
          <?php else : ?>
            <a class="dropdown-item" href="<?= base_url('hasil-pkl/keluar') ?>">
              <i class="mdi mdi-logout me-2"></i> Keluar </a>
          <?php endif ?>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>