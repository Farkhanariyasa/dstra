<!-- Modal Riset 3  -->
<!-- 1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">dasbor Bar Chart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset3/unduh" method="POST">
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
                    <button type="submit" id="btndownload3" class="tombol btn-for" data-bs-dismiss="modal" aria-label="Close">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>   

<!-- 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">dasbor Pie Chart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset3/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                      
                        <label for="recipient-name" class="col-form-label">Nama</label>
                        <input type="text" class="form-control tess" name="nama" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text"   onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control" name="email" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label">Instansi</label>
                        <input type="text" class="form-control" name="instansi" id="recipient-name" placeholder="Instansi Asal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="btndownload" class="tombol btn-for" data-bs-dismiss="modal">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- 3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">dasbor D Chart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset3/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name"  class="col-form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text" name="email"  onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name"  class="col-form-label">Instansi</label>
                        <input type="text" name="instansi" class="form-control" id="recipient-name" placeholder="Instansi Asal ">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"id="btndownload2" class="tombol btn-for" data-bs-dismiss="modal">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>   

<!-- 4 -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Stacked Chart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset3/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name"  class="col-form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text" name="email"  onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name"  class="col-form-label">Instansi</label>
                        <input type="text" name="instansi" class="form-control" id="recipient-name" placeholder="Instansi Asal ">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"id="btndownload4" class="tombol btn-for" data-bs-dismiss="modal">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- 5 -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Radar Chart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="unduhVisualisasi" action="<?= base_url(); ?>/hasil-pkl/riset3/unduh" method="POST">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="recipient-name"  class="col-form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="recipient-name" placeholder="Nama Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name" class="col-form-label" name="emailunduh">Email</label>
                        <input type="text" name="email"  onclick="ValidateEmail(document.unduhVisualisasi.emailunduh)" class="form-control" id="recipient-name" placeholder="Email Anda">
                    </div>
                    <div class="mb-1">
                        <label for="recipient-name"  class="col-form-label">Instansi</label>
                        <input type="text" name="instansi" class="form-control" id="recipient-name" placeholder="Instansi Asal ">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="tombol btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"id="btndownload5" class="tombol btn-for" data-bs-dismiss="modal">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div> 