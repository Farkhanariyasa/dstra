<footer style="background-color: #506396;">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-center pt-3">
        <div class="col-lg-12 text-center text-white ;">
          <h5 style="font-size: 14px;">Dibuat Dengan Sepenuh <span class="text-danger">❤️</span></h5>
          <p style="font-size: 14px;">&copy; Divisi PVD TI PKL 62 2022/2023</p>
        </div>
      </div>
    </div>
  </div>

</footer><!-- End Footer -->
</div>
</div>
</div>
<script src="<?= base_url('pvd/vendors/js/vendor.bundle.base.js'); ?>"></script>
<script src="<?= base_url('pvd/js/misc.js'); ?>"></script>

<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
<script src="<?= base_url('pvd/js/table2excel.js'); ?>"></script>

<script>
  $(document).ready(function () {
    $('#table_id').DataTable({
      "responsive": true,
      "scrollX": true,
      // dom: 'Bfrtip',
      // buttons: [
      //   'copyHtml5',
      //   'excelHtml5',
      //   'csvHtml5',
      //   'pdfHtml5'
      // ]
      // "scrollY": "200px",
    });
  });
</script>

<!-- Untuk dasbor -->
<script src="<?= base_url('pvd/js/off-canvas.js'); ?>"></script>
<script src="<?= base_url('pvd/js/main.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey"></script>

</body>

</html>