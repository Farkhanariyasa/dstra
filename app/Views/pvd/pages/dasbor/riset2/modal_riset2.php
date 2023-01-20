<!-- Modal Riset 2  -->
<!-- 1 -->
<div class="modal fade" id="exampleModal2-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset2/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" >Nama</label>
                        <input type="text" class="form-control" name="nama" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text" onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control" name="email" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Instansi</label>
                        <input type="text" class="form-control" name="instansi" id="recipient-name" placeholder="Instansi Asal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="" class="tombol btn-for" data-bs-dismiss="modal" aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>   

<!-- 2 -->
<div class="modal fade" id="exampleModal2-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grafik Batang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset2/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" >Nama</label>
                        <input type="text" class="form-control" name="nama" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text" onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control" name="email" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Instansi</label>
                        <input type="text" class="form-control" name="instansi" id="recipient-name" placeholder="Instansi Asal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="jk_bar" class="tombol btn-for" data-bs-dismiss="modal" aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- 3 -->
<div class="modal fade" id="exampleModal2-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grafik Batang Horizontal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset2/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text" onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control"
                            name="email" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Instansi</label>
                        <input type="text" class="form-control" name="instansi" id="recipient-name" placeholder="Instansi Asal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="bar_horizontal" class="tombol btn-for" data-bs-dismiss="modal"
                        aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>   