<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    .card {
        background-color: #20B2AA;
        border: 1px solid #ccc;
        border-radius: 2px;
        padding: 10px;
        margin: 5px;
        width: 150px;
        display: inline-block;
        color: white;
        margin-left: 0;
        transition: margin-left 0.5s;
    }


    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .login-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008B8B;
        color: #fff;

        text-decoration: none;
        text-align: center;
        font-size: 10px;
        border: none;

        width: 100px;
    }

    .navbar {
        background-color: #333;
        color: #fff;
        padding: 10px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    /* CSS Untuk Side Navbar (Samping) */
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 2;
        top: 0;
        left: 0;
        background-color: #333;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 5px 10px;
        text-decoration: none;
        font-size: 18px;
        color: #fff;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        background-color: #555;
    }

    /* CSS Untuk Konten */
    .content {
        margin-left: 0;
        padding: 30px;
        transition: margin-left 0.5s;
    }

    /* CSS Umum */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Tombol untuk membuka side navbar */
    .openbtn {
        background-color: #333;
        color: #fff;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        margin-left: 0;
        transition: margin-left 0.5s;
    }

    .openbtn:hover {
        background-color: #555;
    }

    .search-container {
        float: right;
    }

    .search-box {
        padding: 2px;
        border: none;
        border-radius: 5px;
    }

    .login-button {
        display: inline-block;
        padding: 5px;
        background-color: blue;
        color: #fff;
        text-decoration: none;

        font-size: 15px;
        border: none;

    }

    .navbar h1 {
        margin: 0;
    }

    .container {
        margin-top: 60px;
        /* Membuat ruang antara navbar dan tabel */
        padding: 20px;
    }
    </style>
</head>

<body class="min-vh-100 d-flex">
    <div class="navbar">
        <span class="openbtn" onclick="openNav()">&#9776;</span>
        <h3 class="text-center text-white">Ubah Data Siswa</h3>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <button type="submit">Cari</button>
        </div>
    </div>

    <!-- Side Navbar (Samping) -->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; tutup</a>
        <a href="<?php echo base_url('admin') ?>">Beranda</a>
        <a href="<?php echo base_url('admin/siswa') ?>">Siswa</a>
    </div>
    <div class="content">

        <div class="container mt-6">

            <div class="overflow-x-auto">

                <?php foreach($siswa as $data_siswa): ?>
                <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>" class="row" method="post">
                    <input type="hidden" name="id_siswa" value="<?php echo $data_siswa->id_siswa ?>">
                    <div class="mb-3 col-6">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                            value="<?php echo $data_siswa->nama_siswa ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nisn"
                            value="<?php echo $data_siswa->nisn ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                            Gender
                        </label>
                        <select name="gender" id="gender"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option selected value="<?php echo $data_siswa->gender ?>">
                                <?php echo $data_siswa->gender ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                            Kelas
                        </label>
                        <select name="kelas" id="kelas"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option selected value="<?php echo $data_siswa->id_kelas ?>">Pilih Kelas</option>
                            <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
                            </option>
                            <?php foreach($kelas as $row): ?>
                            <option value="<?php echo $row->id ?>">
                                <?php echo $row->tingkat_kelas?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                            Jurusan
                        </label>
                        <select name="kelas" id="kelas"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option selected value="<?php echo $data_siswa->id_kelas ?>">Pilih jurusan</option>
                            <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
                            </option>
                            <?php foreach($kelas as $row): ?>
                            <option value="<?php echo $row->id ?>">
                                <?php echo$row->jurusan_kelas ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

            </div>
        </div>

    </div>
    </div>

    <?php endforeach ?>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementsByClassName("content")[0].style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementsByClassName("content")[0].style.marginLeft = "0";
    }
    </script>
</body>

</html>