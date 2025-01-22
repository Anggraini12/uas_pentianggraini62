<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_ktg = $_POST['id_ktg'];
$nama_ktg = $_POST['nama_ktg'];
#3. menulis query
$simpan = "INSERT INTO tbl_ktg (id_ktg,nama_ktg) VALUES ('$id_ktg','$nama_ktg')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>