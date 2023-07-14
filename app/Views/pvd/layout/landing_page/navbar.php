<?php $request = \Config\Services::request(); ?>
<nav class="navbar navbar-expand-lg site-navbar-target sticky-top header-scrolled py-2 px-3 shadow ">
	<div class="container">
		<div class="mr-3">
			<a href="<?= base_url("hasil-pkl") ?>"><img src="<?= base_url('pvd/img/logo_pkl.png') ?>" alt="logo" width="55px"></a>
		</div>
		<a class="navbar-brand mt-2" href="<?= base_url("hasil-pkl") ?>" style=" font-size: 120%; line-height: 25px"><span style="color: #4b395f;"><strong>WEB HASIL PKL 62</strong></span><br><span style="color: #506396; font-weight:600">T.A. 2022/2023</span></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa-solid fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav nav ml-auto mt-2" style="background:transparent !important">
				<li class="nav-item"><a href="<?= base_url("hasil-pkl") ?>" class="nav-link nav-menu <?= $request->uri->getSegment(2) == "" ? "active" : "" ?>"><span>Beranda</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset1") ?>" class="nav-link nav-menu <?= $request->uri->getSegment(2) == "riset1" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Kajian Pemanfaatan MPD dalam Menunjang Statistik Pariwisata"><span>Riset 1</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset2") ?>" class="nav-link nav-menu <?= $request->uri->getSegment(2) == "riset2" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Pilot Survei Wisatawan Nusantara"><span>Riset 2</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset3") ?>" class="nav-link nav-menu <?= $request->uri->getSegment(2) == "riset3" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Tenaga Kerja di Industri Pariwisata"><span>Riset 3</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset4") ?>" class="nav-link nav-menu <?= $request->uri->getSegment(2) == "riset4" ? "active" : "" ?>" data-bs-toggle="tooltip" title="Kesiapan Pemanfaatan TIK Unit Usaha Pariwisata Skala Mikro dan Kecil di Kota Batu dalam Menerapkan Smart Tourism Destination"><span>Riset 4</span></a></li>
				<?php if (session()->get('isLoggedInHasilPkl')) : ?>
					<!-- <li class="nav-item dropdown">
						<a id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false" class="">
							<div class="nav-profile-img">
								<img src="<?= isset((session()->get())['akun_picture']) ? (session()->get())['akun_picture'] : base_url('pvd/img/default.png') ?>" alt="image">
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
							<a class="dropdown-item preview-item" href="<?= base_url("hasil-pkl/riset1/dasbor") ?>">
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject font-weight-normal mb-1">Dasbor</h6>
								</div>
							</a>
							<a class="dropdown-item preview-item" href="<?= base_url("hasil-pkl/keluar") ?>">
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject font-weight-normal mb-1">Keluar</h6>
								</div>
							</a>
						</div>
					</li> -->
					<li class="nav-item"><a href="<?= base_url("hasil-pkl/keluar") ?>" class="tombol btn-for"><span>Keluar <i class="fa-solid fa-right-from-bracket"></i></span></a></li>

				<?php else : ?>
					<li class="nav-item"><a href="<?= base_url("hasil-pkl/masuk") ?>" class="tombol btn-for"><span>Masuk</span></a></li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>
<div class="forbody">