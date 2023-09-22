<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .background {
        background-image: url(https://foto.data.kemdikbud.go.id/getImage/20328986/12.jpg);
        background-size: cover;

    }

    .ddd {
        text-align: center;
        color: yellow;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: white;
    }

    .centered {
        text-align: center;
    }

    .login-button {
        display: inline-block;
        padding: 15px 30px;
        background-color: #3498db;
        /* Warna latar belakang */
        color: #fff;
        /* Warna teks */
        border-radius: 10px;
        /* Sudut-sudut melengkung */
        text-decoration: none;
        text-align: center;
        font-size: 10px;
        border: none;
        cursor: pointer;
    }

    .login-butto {
        display: inline-block;
        padding: 15px 30px;
        background-color: #FFA500;
        color: #fff;
        border-radius: 10px;
        text-decoration: none;
        text-align: center;
        font-size: 10px;
        border: none;
        cursor: pointer;
        width: 100px;
    }

    .login-button:hover {
        background-color: blue;
    }

    .login-butto:hover {
        background-color: #FFD700;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body class="background">

    <div class="container">
        <div class="centered">
            <h1>Selamat Datang di</h1>
            <h3>SMK Bina Nusantara Mranggen</h3>
            <center>
                <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" width="300px" height="250px">
            </center>
            <br>

            <a href="./auth/register" class="login-button">Register</a>
            </a>
            <a href="./auth" class="login-butto">Login</a>
        </div>
    </div>

</body>

</html>