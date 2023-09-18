<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    .body {

        background-image: url(https://foto.data.kemdikbud.go.id/getImage/20328986/12.jpg);
        background-size: cover;

    }

    }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body class="body">
    <div class="container ">

        <div class=" justify-content-center">
            <center>
                <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" width="100px" height="150px">
            </center>
            <h5 class="card-header mx-auto text-fold text-center"><strong>Silahkan Login</strong></h5>
            <div class="card-body">
                <form action="<?php echo base_url(); ?>auth/aksi_login" method="post" class="space-y-12">
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Input your email"
                            aria-describedby="emailHelp">

                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm"><strong>Password</strong></label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Input your password" autocomplete="off">
                            <a rel="noopener noreferrer" href="#"
                                class="text-xs hover:underline dark:text-gray-400">Lupa Password?</a>
                        </div>

                        <div class="d-grid gap-2 col-6 ">
                            <p>Belum punya akun? <a href="auth/register">Register</a></p>
                            <button type="submit" class="btn btn-primary text-bg-info">Login</button>
                            <div class="text-center">

                            </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>