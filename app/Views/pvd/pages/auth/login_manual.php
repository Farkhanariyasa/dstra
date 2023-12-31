<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Masuk | Hasil PKL</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="<?= base_url('pvd/img/logo_pkl.png') ?>">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?= base_url('pvd/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('pvd/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- Dasbor CSS -->
    <link rel="stylesheet" href="<?= base_url('pvd/css/dasbor.css'); ?>">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth forbody">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto text-center">
                        <div class="auth-form-light text-left p-5" style="background-color: white;">
                            <div class="brand-logo">
                                <a href="<?= base_url('hasil-pkl'); ?>"><img src="<?= base_url('pvd/img/logo_pkl.png'); ?>" alt="logo" /></a>
                            </div>
                            <h1>Web Hasil PKL 62 <br />T.A. 2022/2023 </h1>
                            <h4>Masuk dengan Akun Khusus</h4>
                            <?php if (session()->getFlashdata('gagal')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('gagal') ?>
                                </div>
                            <?php endif ?>
                            <form class="pt-2" action="<?= base_url('hasil-pkl/loginmanual') ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Nama Pengguna">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Kata Sandi">
                                </div>
                                <div class="mt-3" style="margin-bottom: 10px;">
                                    <input type="submit" class="btn btn-block btn-login btn-lg auth-form-btn" name="submit" value="Masuk" />
                                </div>
                                <a href="<?= base_url('hasil-pkl/masuk'); ?>" class="text-decoration-none">
                                    <h4 style="color: #4b395f; font-size:medium"> Kembali</h4>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- Plugin JS -->
    <script src="<?= base_url('pvd/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <script src="<?= base_url('pvd/js/misc.js'); ?>"></script>
    <script src="<?= base_url('pvd/js/off-canvas.js'); ?>"></script>
    <script src="<?= base_url('pvd/js/hoverable-collapse.js'); ?>"></script>
</body>

</html>