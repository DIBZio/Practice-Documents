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
    <div class=" container column is-two-fifths mt-5">
        <div class="is-align-self-center">
            <h2 class="is-size-4 has-text-weight-medium ">Tambah data dosen</h2>
        </div>
        <div class="mt-2">
            <form action="" method="post">
                <div class="field">
                    <label class="label">Nomor Induk Dosen</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="cth: D0000">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Nama Dosen</label>
                    <div class="control">
                        <input class="input" type="email" placeholder="cth: Ahmad kariadi">
                    </div>
                </div>
                <div class="columns">
                    <div class="control column">
                        <label class="label">Jenis Kelamin</label>
                        <div class="select">
                            <select>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="control column">
                        <label class="label">Status menikah</label>
                        <div class="select">
                            <select>
                                <option>Sudah</option>
                                <option>Belum</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Alamat</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Textarea"></textarea>
                    </div>
                </div>
                <label class="checkbox">
                    <input type="checkbox">
                    data yang saya masukkan sudah benar</a>
                </label>
                <div>
                    <button class="mt-2">
                        <a href="" class="button is-fullwidth is-primary ">Simpan</a>
                    </button>
                    <button class="mt-2">
                        <a href="" class="button is-fullwidth is-primary ">Kembali</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>