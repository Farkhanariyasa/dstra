<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <?php foreach ($menu as $m) : ?>
      <li class="nav-item">
        <?php if (isset($m['subMenu'])) : ?>
          <a class="nav-link" data-bs-toggle="collapse" href="<?= $m['href'] ?>" aria-expanded="false" aria-controls="ui-basic">
          <?php else : ?>
            <a class="nav-link " href="<?= base_url('hasil-pkl' . $m['href']) ?>">
            <?php endif; ?>
            <span class="menu-title"><?= $m['menu']; ?></span>
            <?php if (isset($m['subMenu'])) : ?>
              <i class="menu-arrow"></i>
            <?php endif; ?>
            <i class="<?= $m['icon']; ?> menu-icon"></i>
            </a>
            <?php if (isset($m['subMenu'])) : ?>
              <div class="collapse" id="<?= $m['id'] ?>">
                <ul class="nav flex-column sub-menu">
                  <?php foreach ($m['subMenu'] as $sm) : ?>
                    <li class="nav-item">
                      <a class="nav-link " href="<?= base_url('hasil-pkl' . $sm['href']) ?>"><?= $sm['subMenu']; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
      </li>
    <?php endforeach ?>




  </ul>
</nav>