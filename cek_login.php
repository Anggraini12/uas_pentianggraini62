<?php
session_start();
// Jika Tidak Ada $_SESSION dan $_COOKIE maka
//Alihkan Kehalaman Login
if(!isset($_SESSION['']) AND !isset ($_COOKIE['cid'])){
    header("location:login.php");

}
?>