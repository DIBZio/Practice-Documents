<?php

require_once('./function.php');
// $querry = mysqli_query($koneksi, "SELECT * FROM dosen");

// $result = mysqli_fetch_assoc($querry);

// foreach ($result as $dosen) {
//   echo $dosen;
// }
// echo "<br>";
// while ($dosen = mysqli_fetch_assoc($querry)) {
//   echo ($dosen);
// }

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <title>Admin</title>
</head>

<body class="container mt-5">
  <h1 class="is-size-2 has-text-weight-bold">Data Dosen Universitas Supranatural Merapi</h1>
  <a href="form.php" class=" button is-info is-small is-rounded">+ Tambah Dosen</a>
  <table class="table is-striped is-hoverable">
    <thead>
      <th>No.</th>
      <th>Nama</th>
      <th>NIP</th>
      <th>Kelamin</th>
      <th>Menikah</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      <?php $nomor = 1;
      foreach (getdosen() as $dosen) : ?>
        <tr>
          <th><?= $nomor ?></th>
          <td><?= $dosen['nama'] ?></td>
          <td><?= $dosen['nip'] ?></td>
          <td><?= $dosen['kelamin'] ?></td>
          <td><?= $dosen['menikah'] == 1 ? 'Sudah' : 'Belum'; ?></td>
          <td><?= $dosen['alamat'] ?></td>
          <td>
            <a href="edit.php?edit=" class="button is-primary is-small is-rounded">Edit</a>
            <a href="delete.php?delete=<?= $dosen['id'] ?>" class="button is-danger is-small is-rounded">Hapus</a>
          </td>
        </tr>

      <?php $nomor++;
      endforeach ?>
    </tbody>
  </table>
</body>

</html>