<?php $request = \Config\Services::request(); ?>

<nav class="navbar navbar-expand-lg site-navbar-target sticky-top header-scrolled py-2 px-3 shadow ">
	<div class="container">
		<div class="mr-3">
			<a href="<?= base_url("hasil-pkl/beranda") ?>"><img src="<?= base_url('pvd/img/LogoPKL.png') ?>" alt="logo" width="55px"></a>
		</div>
		<a class="navbar-brand mt-2" href="<?= base_url("hasil-pkl/beranda") ?>" style=" font-size: 120%; line-height: 25px"><span style="color: #4b395f;"><strong>WEB HASIL PKL 62</strong></span><br><span style="color: #506396; font-weight:600">T.A. 2022/2023</span></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa-solid fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav nav ml-auto mt-2" style="background:transparent !important">
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset1") ?>" class="nav-link nav-menu text-center <?= $request->uri->getSegment(2) == "riset1" ? "active" : "" ?>"><span>Riset 1</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset2") ?>" class="nav-link nav-menu text-center <?= $request->uri->getSegment(2) == "riset2" ? "active" : "" ?>"><span>Riset 2</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset3") ?>" class="nav-link nav-menu text-center <?= $request->uri->getSegment(2) == "riset3" ? "active" : "" ?>"><span>Riset 3</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset4") ?>" class="nav-link nav-menu text-center <?= $request->uri->getSegment(2) == "riset4" ? "active" : "" ?>"><span>Riset 4</span></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="forbody">