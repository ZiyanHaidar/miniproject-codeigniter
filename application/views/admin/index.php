<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .card {
        background-color: black;
        border: 1px solid #ccc;
        border-radius: 2px;
        padding: 10px;
        margin: 5px;
        width: 200px;
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
        padding: 10px;
        background-color: gray;
        color: #fff;
        text-decoration: none;
        text-align: center;
        font-size: 13px;
        border: none;
        width: 180px;
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
        padding: 60px;
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

    body {
        background-color: white;
    }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div class="navbar">
        <span class="openbtn" onclick="openNav()">&#9776;</span>
        <h3 class="text-center text-white">Dashboard</h3>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <button type="submit">Cari</button>
        </div>
    </div>

    <!-- Side Navbar (Samping) -->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>

        <li>
            <a href="<?php echo base_url('admin') ?>" <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('admin/siswa') ?>" <span class="flex-1 ml-3 whitespace-nowrap">Daftar
                Siswa</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('admin/guru') ?>" <span class="flex-1 ml-3 whitespace-nowrap">Daftar
                Guru</span>
            </a>
        </li>
        <li>
            <a onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt fa-2x text-danger">LogOut</i>
            </a>

        </li>
        </ul>
    </div>

    <!-- Konten -->
    <div class="content">

        <div class="card">
            <p>Jumlah Kelas</p>
            <h2><?php echo $kelas ?>
            </h2>
            <a href="./admin/detail_kelas" class="login-button">Lihat Detail</a>
        </div>
        <div class="card">
            <p>Jumlah Mapel</p>
            <h2><?php echo $mapel ?>
            </h2>
            <a href="./admin/detail_mapel" class="login-button">Lihat Detail</a>
        </div>
        <div class="card">
            <p>Jumlah Siswa</p>
            <h2><?php echo $siswa ?>
            </h2>
            <a href="./admin/detail_siswa" class="login-button">Lihat Detail</a>
        </div>
        <div class="card">
            <p>Jumlah guru</p>
            <h2><?php echo $guru?>
            </h2>
            <a href="./admin/detail_guru" class="login-button">Lihat Detail</a>
        </div>

    </div>

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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- LOGOUT -->
    <script>
    function confirmLogout() {
        Swal.fire({
            title: 'Yakin mau LogOut?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo base_url('auth/logout') ?>";
            }
        });
    }
    </script>
</body>

</html>