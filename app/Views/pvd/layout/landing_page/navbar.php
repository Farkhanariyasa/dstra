<?php $request = \Config\Services::request(); ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark site-navbar-target p-0 px-3 shadow" id="ftco-navbar" style="z-index:2000">
	<div class="container">
		<div class="mr-3">
			<a href="<?= base_url() ?>"><img src="<?= base_url('pvd/img/LogoPKL.png') ?>" class="me-3" alt="" style="max-width:50px"></a>
		</div>
		<a class="navbar-brand mt-2" href="<?= base_url() ?>" style=" font-size: 120%; line-height: 25px">PKL Polstat STIS <br><span>T.A. 2022/2023</span><br></a>
		<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle " type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span>
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav nav ml-auto mt-2" style="background:transparent !important">
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/beranda") ?>" class="nav-link nav-menu text-left <?= $request->uri->getSegment(2) == "beranda" ? "active" : "" ?>"><span>Beranda</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset1") ?>" class="nav-link nav-menu text-left <?= $request->uri->getSegment(2) == "riset1" ? "active" : "" ?>"><span>Riset1</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl//riset2") ?>" class="nav-link nav-menu text-left <?= $request->uri->getSegment(2) == "riset2" ? "active" : "" ?>"><span>Riset2</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl//riset3") ?>" class="nav-link nav-menu text-left <?= $request->uri->getSegment(2) == "riset3" ? "active" : "" ?>"><span>Riset3</span></a></li>
				<li class="nav-item"><a href="<?= base_url("hasil-pkl/riset4") ?>" class="nav-link nav-menu text-left <?= $request->uri->getSegment(2) == "riset4" ? "active" : "" ?>"><span>Riset4</span></a></li>

			</ul>
		</div>
	</div>
</nav>