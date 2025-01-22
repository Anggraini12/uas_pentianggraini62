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
$simpan = "INSERT INTO tabel_buku (id_buku,judul_buku,penulis,kategori_id,cover_buku) VALUES ('$id_buku','$judul_buku','$penulis','$kategori_id','$cover_buku')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>