<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$kategori_id = $_POST['kategori_id'];
$cover_buku = $_POST['cover_buku'];

#3. menulis query
$sunting = "UPDATE dosens SET nidn='$nidn', nama='$nama', jabatan='$jabatan',
email='$email', no_hp='$no_hp' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>