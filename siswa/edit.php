<?php

$title = 'UBAH DATA PERKARA';
include 'layout/header.php';

// ambil dari database
$id = (int)$_GET['id'];

$data = select("SELECT * FROM data_siswa WHERE id=$id")[0];

// check tombol
if (isset($_POST['ubah'])) {
    if (update_siswa($_POST) > 0){
        echo "<script>
        alert('Data berhasil di ubah 😎🔥');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal di ubah!!');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<div class = "container mt-3"  >
    <h1>Ubah Data Siswa</h1>

    <form action="" method = "post"  enctype="multipart/form-data" >

    <input type="hidden" name="id" value="<?= $data ['id']; ?>">
    <input type="hidden" name="fotoLama" value="<?= $data['foto']; ?>">


<div class="row">
    <div class="mb-3">
    <label for="nama_siswa" class="form-label" >Nama Siswa</label>
    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $data['nama_siswa'];?>">
</div>

<div class="mb-3">
    <label for="foto" class="form-label">Foto Tersangka</label>
    <input type="file" class="form-control" id="foto" name="foto">
    <p>
        <small>Gambar Sebelumnya</small>
    </p>
    <img src="asset/img/<?= $data ['foto'];?>" alt="foto" width="100px">
</div>

<div>
    <button type="submit" name="ubah" class="btn btn-primary" style="float : right">Ubah</button>&emsp;<a href="index.php" class="btn btn-secondary" style="float : left">Kembali</a>
</div>

    </form>

</div>
<?php
include 'layout/footer.php';
?>
</form>