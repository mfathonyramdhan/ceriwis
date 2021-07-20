<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesanan Paket Wisata</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>

                <!-- debug mode -->
                <th scope="col">Role</th>
                <!-- end debug mode -->

                <th scope="col">Nama</th>
                <th scope="col">Trayek</th>
                <th scope="col">Tanggal Kegiatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pesanan as $d) { ?>
                <tr>
                    <td><?= $no++ ?></td>

                    <!-- debug mode -->
                    <td><?= $d['nama']  ?></td>
                    <!-- end debug mode -->

                    <td><?= $d['nama_pemesan'] ?></td>
                    <td><?= $d['trayek'] ?></td>
                    <td>

                        <?php echo $newDate = date("d/m/Y", strtotime($d['tgl_selesai'])); ?>

                    </td>
                    <td>
                        <abbr title="Lihat"> <a href="<?= base_url('User/detailjadwal/') . $d['id_pesanan'] ?>" class="btn btn-primary">Lihat Jadwal</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>



</div>


</div>
<!-- End of Main Content
 -->