<?php
require_once('./functions.php');


if (isset($_POST['tambah'])) {
    $nid = $_POST['nid'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $menikah = $_POST['menikah'];
    $alamat = $_POST['alamat'];
    // tambahDosen($nid, $nama, $kelamin, $menikah, $alamat);
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="padding: 10px;">
    <a href="index.php">Home</a>
    <form method="POST">
        <div>
            <label>nid</label>
            <input type="text" name="nid" required>
        </div>
        <div>
            <label>nama</label>
            <input type="text" name="nama" required>
        </div>
        <div>
            <label>kelamin</label>
            <select required name="kelamin">
                <option selected>-- Pilih Kelamin--</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>
        <div>
            <label>Menikah</label>
            <select required name="menikah">
                <option selected>-- Pilih Status--</option>
                <option value="1">Sudah Menikah</option>
                <option value="0">Belum Menikah</option>
            </select>
        </div>
        <div>
            <label>Alamat</label>
            <textarea required name="alamat"></textarea>
        </div>
        <button name="tambah">Tambah</button>
    </form>
</body>

</html>