<!-- 1 -->
<div class="modal fade" id="#exampleModal-m2sm1-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset4/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Nama <span
                                class="text-danger">*</span></label>
                        <input oninput="getvalue()" type="text" class="form-control nama" name="nama" id="nama"
                            placeholder="Nama Anda" required>
                        <div id="errornama" class="errorvlds"></div>
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email <span
                                class="text-danger">*</span></label>
                        <input oninput="getvalue()" type="email" class="form-control email" name="email" id="email"
                            placeholder="Email Anda" required>
                        <div id="erroremail" class="errorvlds"></div>
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Instansi <span
                                class="text-danger">*</span></label>
                        <input oninput="getvalue()" type="text" class="form-control instansi" name="instansi"
                            id="instansi" placeholder="Instansi Asal" required>
                        <div id="errorinstansi" class="errorvlds"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-danger" data-bs-dismiss="modal">Kembali</button>
                    <button disabled type="submit" id="button-download-1" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 2 -->
<div class="modal fade" id="#exampleModal-m2sm1-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset4/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Nama <span
                                class="text-danger">*</span></label>
                        <input oninput="getvalue()" type="text" class="form-control nama" name="nama" id="nama"
                            placeholder="Nama Anda" required>
                        <div id="errornama" class="errorvlds"></div>
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email <span
                                class="text-danger">*</span></label>
                        <input oninput="getvalue()" type="email" class="form-control email" name="email" id="email"
                            placeholder="Email Anda" required>
                        <div id="erroremail" class="errorvlds"></div>
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Instansi <span
                                class="text-danger">*</span></label>
                        <input oninput="getvalue()" type="text" class="form-control instansi" name="instansi"
                            id="instansi" placeholder="Instansi Asal" required>
                        <div id="errorinstansi" class="errorvlds"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-danger" data-bs-dismiss="modal">Kembali</button>
                    <button disabled type="submit" id="button-download-2" class="tombolkonf"
                        data-bs-dismiss="modal">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>