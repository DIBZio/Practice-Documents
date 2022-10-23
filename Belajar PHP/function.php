<?php

require_once('./koneksi.php');

function getdosen()
{
    global $koneksi;
    return mysqli_query($koneksi, 'SELECT * FROM dosen');
}

function deletedosen($id)
{
    global $koneksi;
    return mysqli_query($koneksi, "DELETE FROM dosen WHERE id=($id)");
}

function tambahDosen($nip, $nama, $kelamin, $menikah, $alamat)
{
    global $koneksi;
    return mysqli_query($koneksi, "INSERT INTO dosen(
        nip,nama,kelamin,menikah,alamat
        ) VALUE ('$nip', '$nama', '$kelamin', '$menikah', '$alamat')") === 1;
}
