<!-- 1 -->
<div class="modal fade" id="modal-download-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
<div class="modal fade" id="modal-download-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-2" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 3 -->
<div class="modal fade" id="modal-download-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-3" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 4 -->
<div class="modal fade" id="modal-download-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-4" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 5 -->
<div class="modal fade" id="modal-download-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-5" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 6 -->
<div class="modal fade" id="modal-download-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-6" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 7 -->
<div class="modal fade" id="modal-download-7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-7" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 8 -->
<div class="modal fade" id="modal-download-8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-8" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 9 -->
<div class="modal fade" id="modal-download-9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-9" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 10 -->
<div class="modal fade" id="modal-download-10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-10" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 11 -->
<div class="modal fade" id="modal-download-11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Unduh Hasil PKL</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url('hasil-pkl/riset4/dasbor'); ?>" method="POST">
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
                    <button disabled type="submit" id="button-download-11" class="tombolkonf" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>

