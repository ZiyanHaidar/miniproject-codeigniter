<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        display: flex;
        margin: 0;
        min-height: 100vh;
        background-color: #61677A;

    }

    #sidebar {
        background-color: #272829;

        color: #fff;
        height: 100%;
        width: 250px;
        position: fixed;
        left: 0;
        top: 0;
        transition: 0.3s;
        padding-top: 20px;
    }

    #sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        color: #fff;
        display: block;
    }

    #sidebar a:hover {
        background-color: black;

    }

    #content {
        flex: 1;
        margin-left: 250px;
        transition: 0.3s;
        padding: 20px;
    }

    @media screen and (max-width: 788px) {
        #sidebar {
            width: 100%;
            position: static;
            height: auto;
            margin-bottom: 20px;
        }

        #content {
            margin-left: 0;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-md-3 col-lg-2 d-md-block">
                <a href="<?php echo base_url('admin') ?>">
                    <i class="fas fa-chart-line mr-2"></i> Dashboard
                </a>
                <a href="<?php echo base_url('admin/siswa') ?>">
                    <i class="fas fa-user mr-2"></i> Siswa
                </a>
                <a href="<?php echo base_url('admin/guru') ?>">
                    <i class="fas fa-chalkboard mr-2"></i> Guru
                </a>
                <a href="<?php echo base_url('admin/kelas') ?>">
                    <i class="fas fa-landmark mr-2"></i> Kelas
                </a>
                <a href="<?php echo base_url('admin/mapel') ?>">
                    <i class="fas fa-book mr-2"></i> Mapel
                </a>

            </div>

            <div id="content" role="main">
                <div class="card mb-4 shadow">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h1>Ubah Kelas</h1>

                    </div>
                </div>

                <div class="card mb-4 shadow">
                    <div class="card-body">

                        <?php foreach ($mapel as $data_mapel): ?>
                        <form action="<?php echo base_url('admin/aksi_ubah_mapel') ?>" enctype="multipart/form-data"
                            method="POST">
                            <input name="id" type="hidden" value="<?php echo $data_mapel->id ?>">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Mapel</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Nama Mapel" value="<?php echo $data_mapel->nama_mapel ?>"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaguru">Nama Guru</label>
                                        <input type="text" class="form-control" id="namaguru" name="namaguru"
                                            placeholder="Nama Guru" value="<?php echo $data_mapel->nama_guru ?>"
                                            required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!-- SweetAlert untuk berhasil mengubah siswa -->
        <?php if ($this->session->flashdata('success')): ?>
        <script>
        Swal.fire({
            icon: 'success',
            title: '<?= $this->session->flashdata('success') ?>',
            showConfirmButton: false,
            timer: 1500
        });
        </script>
        <?php endif; ?>

        <!-- SweetAlert untuk gagal mengubah siswa -->
        <?php if ($this->session->flashdata('error')): ?>
        <script>
        Swal.fire({
            icon: 'error',
            title: '<?= $this->session->flashdata('error') ?>',
            showConfirmButton: false,
            timer: 1500
        });
        </script>
        <?php endif; ?>
</body>

</html>