<?php
require_once('./function.php');


if (isset($_POST['tambah'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $menikah = $_POST['menikah'];
    $alamat = $_POST['alamat'];
    tambahDosen($nip, $nama, $kelamin, $menikah, $alamat);
    header('location: index.php');
}
