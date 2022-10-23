<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <title>Tambah Dosen</title>
</head>

<body>
  <div class="container box column is-two-fifths my-5">
    <h2 class="title is-2 has-text-centered">Tambah Data Dosen</h2>
    <hr>
    <form action="add.php" method="post">
      <div class="field">
        <label class="label">Nama</label>
        <div class="control">
          <input required class="input" type="text" placeholder="Nama Lengkap" name="nama">
        </div>
        <p class="help">Sesuai KTP</p>
      </div>
      <div class="field">
        <label class="label">NIP</label>
        <div class="control">
          <input required class="input" type="text" placeholder="Nomor Induk Pegawai" name="nip">
        </div>
        <p class="help">Sesuai NIP</p>
      </div>
      <div class=" field control">
        <label class="label">Jenis Kelamin</label>
        <div class="select">
          <select required name="kelamin">
            <option value="Pria">Laki-laki</option>
            <option value="Wanita">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="field control">
        <label class="label">Menikah</label>
        <div class="select">
          <select required name="menikah">
            <option value="1">Sudah</option>
            <option value="0">Belum</option>
          </select>
        </div>
      </div>
      <div class="field">
        <label class="label">Alamat</label>
        <div class="control">
          <!-- <textarea class="textarea" placeholder="Alamat lengkap anda"></textarea> -->
          <input class="input" type="text" placeholder="Alamat lengkap anda" name="alamat">
        </div>
        <p class="help">Sesuai Domisili</p>
      </div>
      <div class="field is-grouped is-grouped-centered">
        <p class="control">
          <button name="tambah" class="button is-primary">
            Tambahkan
          </button>
        </p>
        <p class="control">
          <a href="index.php" class="button is-light">
            Kembali
          </a>
        </p>
    </form>
  </div>
  </div>
</body>

</html>