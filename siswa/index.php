<?php

$title = 'TABEL DATA SISWA';
include 'layout/header.php';

$siswa = select("SELECT * FROM data_siswa");

?>
<div class="">

    <h1>Data Peserta</h1>

    <a href="tambah.php" class="btn btn-primary mb-1"><i class="fas fa-plus-circle"></i> Tambah Data</a>

    <table class="table table-bordered table-striped mt-4 " id="tabel">
        <thead style="background-color: #00FFFF">
            <tr>
                <th>No.</th>
                <th>Nama siswa</th>
                <th>Foto</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($siswa as $data): ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td><?= $data['nama_siswa'] ?></td>
                    <td><?= $data['foto'] ?></td>
                    <td width="20%" class="text-center">

                    <!-- tombol -->
                        <a href="detail.php?id=<?= $data['id']; ?>" class="btn btn-info"><i class="fa fa-info-circle"></i>&nbsp;Detail</a>                
                        <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('YAKINNN??? 🤨');"><i class="fas fa-trash"></i> Delete</a>
                    
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php include 'layout/footer.php'; ?>