<!DOCTYPE html>
<html>

<head>
    <title>Detail Kelas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
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


    /* CSS Untuk Konten */
    .content {
        margin-left: 0;
        padding: 20px;
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

    .navbar h1 {
        margin: 0;
    }

    .table-container {
        margin-top: 80px;
        /* Membuat ruang antara navbar dan tabel */
        padding: 20px;
    }

    ul {
        list-style-type: none;
    }

    body {
        background-color: white;
    }
    </style>

</head>

<body>
    <div class="navbar">

        <a href="<?php echo base_url('admin') ?>" class="btn btn-success m-2">
            Back
        </a>
        <h3 class="text-center text-white">Detail Kelas</h3>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <button type="submit">Cari</button>
        </div>
    </div>

    <!-- Side Navbar (Samping) -->

    <div class="content">
        <div class="container mt-6">

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center"><b>No</b></th>
                        <th class="text-center"><b>Kelas</b></th>
                        <th class="text-center"><b>Jurusan</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($kelas as $u) { ?>
                    <tr>
                        <td class="text-center"><b><?php echo $no++ ?></b></td>
                        <td class="text-center"><b><?php echo $u->tingkat_kelas ?></b></td>
                        <td class="text-center"><b><?php echo $u->jurusan_kelas ?></b></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


</html>