<footer style="background-color: #506396;">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-center pt-3">
        <a class="w-auto" href="<?= base_url("hasil-pkl") ?>">
          <img src="<?= base_url('pvd/img/logo_pkl.png') ?>" alt="" width="75px" class="my-2">
        </a>
        <div class="col-lg-12 text-center text-white ;">
          <h5 style="font-size: 14px;">Bersinergi dengan Data, Majukan Pariwisata Nusantara</h5>
          <p style="font-size: 14px;">&copy; Divisi PVD TI PKL 62 2022/2023</p>
          <!-- <a href="https://www.instagram.com/kaleidoskop.pkld4_62/" class="text-white" target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
          <a href="mailto:pkl@stis.ac.id" class="text-white" target="_blank"><i class="fa-regular fa-envelope fa-xl"></i></a> -->
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
  });
</script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/e0bb680df5.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- Asset -->
<script src="<?= base_url('pvd/js/collapse.js') ?>"></script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('.hover-link'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

</script>
</html>
