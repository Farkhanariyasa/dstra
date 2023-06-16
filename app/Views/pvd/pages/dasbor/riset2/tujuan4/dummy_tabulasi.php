<div class="card">
    <div class="card-header">
        <strong>
            Tabulasi Analisis Inferensia
        </strong>
    </div>
    <div class="card-body table-responsive" style="padding: 0.5rem 1rem;">
        <table class="table table-hover table-bordered table-responsive" id="k4_tabel1" style="width:100%;">
            <thead>
                <tr>
                    <th scope="col">Jumlah Perjalanan Wisata Dalam Kota</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Tingkat Pendidikan</th>
                    <th scope="col">Pekerjaan KRT</th>
                    <th scope="col">Pekerjaan ART</th>
                    <th scope="col">Disabilitas</th>
                    <th scope="col">Kepemilikan Mobil Ruta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($hasil_pkl_riset2 as $v) :
                ?>
                    <tr>
                        <td><?php echo $v["Jumlah Perjalanan Wisata Dalam Kota"]; ?></td>
                        <td><?php echo $v["Jenis Kelamin"]; ?></td>
                        <td><?php echo $v["Usia"]; ?></td>
                        <td><?php echo $v["Tingkat Pendidikan"]; ?></td>
                        <td><?php echo $v["Pekerjaan KRT"]; ?></td>
                        <td><?php echo $v["Pekerjaan ART"]; ?></td>
                        <td><?php echo $v["Disabilitas"]; ?></td>
                        <td><?php echo $v["Kepemilikan Mobil Ruta"]; ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>