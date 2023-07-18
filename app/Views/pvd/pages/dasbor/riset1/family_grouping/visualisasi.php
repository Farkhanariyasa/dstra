<?= $this->extend('pvd/layout/dasbor/template'); ?>

<?= $this->section('content'); ?>

<style>
    .konten-teks {
        padding: 10%;
        color: #506396;
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
    }

    .konten-teks .card-title {
        font-weight: bold;
        font-size: 50px;
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
        color: #493a5a;

    }

    .konten-teks .subs {
        font-weight: bold;
        font-size: 30px;

    }

    .card-text {
        /* font-family: 'Poppins', 'Courier', 'monospace'; */
        color: #506396;
    }
</style>

<section>
<script>
        window.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire({
                title: 'Informasi Penting',
                text: 'Algoritma yang digunakan pada Family Grouping sama dengan Double Counting baik Algoritma 1, 2 ,dan 3. Namun terdapat perbedaan pada saat penggunaan waktu kerja dan waktu libur',
                icon: 'info',
                confirmButtonColor: '#506396',
                confirmButtonText: 'OK',
                showConfirmButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                footer: '<p>Ketentuan lebih lanjut <a href="#ketentuan" id="closeAlertLink">Tekan sini</a></p>',
            })

            linkDetail = document.getElementById('closeAlertLink')
            linkDetail.onclick = function() {
                window.location.href = "<?= base_url('hasil-pkl/riset1/mpd-familygrouping#ketentuan') ?>";
                // console.log(this.parentElement.parentElement);
                this.parentElement.parentElement.style.display = 'none';
                shadow = document.getElementsByClassName('swal2-backdrop-show')[0];
                shadow.style.display = 'none';
            }


        });
    </script>
</section>

<section id="portfolio" class="portfolio section-bg">
    <div class="container">
        <header class="section-header">
            <p>Family Grouping</p>
        </header>
        <hr class="hrjudul">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:#506396">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-algoritma1-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma1" type="button" role="tab" aria-controls="pills-algoritma1" aria-selected="true">Algoritma Haversine</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-algoritma2-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma2" type="button" role="tab" aria-controls="pills-algoritma2" aria-selected="false">Algoritma H3Geo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-algoritma3-tab" data-bs-toggle="pill" data-bs-target="#pills-algoritma3" type="button" role="tab" aria-controls="pills-algoritma3" aria-selected="false">Algoritma Dynamic Time Warping dan Frechet Distance</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" id="rowdc">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="row" id="testdc">
                    <?php include('data_fg.php') ?>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <script>
        
    </script>
    <!-- Istope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- Chart JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/3.0.1/chartjs-plugin-annotation.min.js" integrity="sha512-Hn1w6YiiFw6p6S2lXv6yKeqTk0PLVzeCwWY9n32beuPjQ5HLcvz5l2QsP+KilEr1ws37rCTw3bZpvfvVIeTh0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Chart JS Plugin Sankey Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey"></script>

    
    <!-- Algoritma FINAL-->
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output1.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output2.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output3.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output4.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output5.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output6.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output7.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output8.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output9.js') ?>"></script>
    <script src="<?= base_url('pvd/js/riset1/hasilFG_output10.js') ?>"></script>

    <!-- Latex Math -->
    <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>

    <!-- Sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script>

    <!-- Fungsi Unduh Chart -->
    <script src="<?= base_url('pvd/js/riset1/btn_Download_fg.js') ?>"></script>
</section>

<?= $this->endSection(); ?>