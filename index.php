<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'universitas';

$konektor = mysqli_connect($hostname, $username, $password, $database);
$query = mysqli_query($konektor, 'SELECT * FROM dosen');

// $result = mysqli_fetch_assoc($query);
// print_r($result);

foreach ($query as $dosen) {
    $kelamin = $dosen['menikah'] === 1 ? 'Sudah menikah' : 'Belum menikah';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="container my-5">
        <h1 class="is-size-2 has-text-weight-semibold ">Data Dosen Universitas Jakal</h1>
        <a href="" class="button is-small is-responsive is-success  is-rounded">Tambahkan dosen +</a>
        <table class="table is-striped is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No induk</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>Status menikah</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($query as $dosen) :
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $dosen['nid'] ?></td>
                        <td><?= $dosen['nama'] ?></td>
                        <td><?= $dosen['kelamin'] ?></td>
                        <td><?= $dosen['menikah'] === '1' ? 'Sudah' : 'Belum' ?></td>
                        <td><?= $dosen['alamat'] ?></td>
                        <td>
                            <a href="" class="button is-small is-responsive is-primary  is-rounded">Ubah</a>
                            <a href="" class="button is-small is-responsive is-danger  is-rounded">Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                endforeach ?>
            </tbody>
        </table>
    </section>
</body>

</html>