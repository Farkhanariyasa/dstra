<div id="wrapper">
    <ul class="navbar-nav bg-sidebar sidebar sidebar-dark anchorover" id="accordionSidebar">

        <a class="sidebar-pkl d-flex align-items-center justify-content-center" href="<?= base_url('/') ?>">
            <div class="mx-3">Hasil PKL 62</div>
        </a>

        <hr class="sidebar-divider my-0">

        <?php foreach ($menu as $m) : ?>
            <li class="nav-item active">
                <a class="nav-link " href="<?= base_url('hasil-pkl' . $m['href']) ?>">
                    <i class="<?= $m['icon']; ?>"></i>
                    <span><?= $m['menu']; ?></span>
                </a>
            </li>

            <?php if (isset($m['subMenu'])) : ?>
                <?php foreach ($m['subMenu'] as $sm) : ?>
                    <li class="nav-item nav-item-sub ">
                        <a class="nav-link " href="<?= base_url('hasil-pkl' . $sm['href']) ?>">
                            <span><?= $sm['subMenu']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach ?>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">


        <div id="content">

            <nav class="navbar navbar-expand bg-color topbar mb-4  shadow">
                <div class="desc">
                    PKL POLSTAT STIS .A. 2022/2023
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item-end">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </a>
                    </li>

                    <li class="top-nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none small"></span>
                            <img class="img-profile rounded-circle">
                        </a>
                    </li>

                </ul>

            </nav>