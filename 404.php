<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <link rel="stylesheet" href="./assets/style.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,700&display=swap');

        body {
            background: linear-gradient(90deg, rgba(127, 87, 138, 0.3172119487908962) 0%, rgba(243, 187, 44, 0.375875350140056) 86%);
            filter: blur(0px);
            padding: 0;
        }

        img {
            cursor: pointer;
            transition: 0.5s;
        }

        img:hover {
            transform: translateY(-4px);
            transition: 0.5s;
        }

        h1 {
            font-family: 'Philosopher', sans-serif;
            font-size: 32px;
            color: #4B1B50;
        }

        .btn-warning {
            color: #32524E;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-warning:hover {
            background-color: #32524E;
            color: #F3BC2C;
            border-color: #32524E;
            filter: drop-shadow(0px 0px 3px #000);
        }
    </style>


</head>

<body>
    <header id="404">
        <div class="d-flex align-items-center justify-content-center flex-column" style="height: 100vh;">
            <img class="img-fluid" src="<?php echo get_theme_file_uri("/assets/Error404.png") ?>" class="image-logo" onclick="window.location.href ='https://nolderajat.ub.ac.id/'">
            <h1 class="text-center py-2 fs-1">Halamannya belum ada nih coy</h1>
            <button type="button" class="btn btn-warning" onclick="window.location.href ='https://nolderajat.ub.ac.id/'">Kembali ke Beranda</button>
        </div>
    </header>

    <!-- <footer class="footer-navigation text-center">
        <p>Copyright &copy; 2023 IT-NolDerajatFilm</p>
    </footer> -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>