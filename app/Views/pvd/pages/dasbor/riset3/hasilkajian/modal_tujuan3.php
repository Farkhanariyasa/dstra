<?php for ($i = 1; $i <= 6; $i++) : ?>
    <div class="modal fade" id="Modal3_<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset3/hasilkajian3" method="POST">
                    <div class="modal-body">
                        <div class="mb-1">
                            <label for="recipient-name" class="col-form-label">Nama <span class="text-danger">*</span></label>
                            <input oninput="getvalue()" type="text" class="form-control nama" name="nama" id="nama" placeholder="Nama Anda" required value="<?= session()->get('akun_nama_lengkap') ?>">
                            <div id="errornama" class="errorvlds"></div>
                        </div>
                        <div class="mb-1">
                            <label for="recipient-name" class="col-form-label" name="emailunduh">Email <span class="text-danger">*</span></label>
                            <input oninput="getvalue()" type="email" class="form-control email" name="email" id="email" placeholder="Email Anda" required value="<?= session()->get('akun_email') ?>">
                            <div id="erroremail" class="errorvlds"></div>
                        </div>
                        <div class="mb-1">
                            <label for="recipient-name" class="col-form-label">Instansi <span class="text-danger">*</span></label>
                            <input oninput="getvalue()" type="text" class="form-control instansi" name="instansi" id="instansi" placeholder="Instansi Asal" required value="<?= session()->get('akun_instansi') ?>">
                            <div id="errorinstansi" class="errorvlds"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="tombol btn-danger" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" id="btndownload3_<?php echo $i ?>" class="tombolkonf">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endfor; ?>