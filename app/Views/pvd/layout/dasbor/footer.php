<footer style="background-color: #506396;">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-center pt-3">
        <div class="col-lg-12 text-center text-white ;">
          <h5 style="font-size: 14px;">Bersinergi dengan Data, Majukan Pariwisata Nusantara</h5>
          <p style="font-size: 14px;">&copy; Divisi PVD TI PKL 62 2022/2023</p>
          <!-- <a href="https://www.instagram.com/kaleidoskop.pkld4_62/" class="text-white" target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
          <a href="mailto:pkl@stis.ac.id" class="text-white" target="_blank"><i class="fa-regular fa-envelope fa-xl"></i></a> -->
        </div>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->
</div>
</div>
</div>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/e0bb680df5.js" crossorigin="anonymous"></script>
<!-- Plugin JS -->
<script src="<?= base_url('pvd/vendors/js/vendor.bundle.base.js'); ?>"></script>
<script src="<?= base_url('pvd/js/misc.js'); ?>"></script>
<script src="<?= base_url('pvd/js/off-canvas.js'); ?>"></script>
<script src="<?= base_url('pvd/js/main.js') ?>"></script>
<!-- Datatable JS -->
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<!-- Datatables Plugin Button Export -->
<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('.hover-link'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

</script>
<script>
    function mKeluar() {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah Anda ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Keluar',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/hasil-pkl/keluar";
            }
        })
    }
</script>
</body>

</html>
