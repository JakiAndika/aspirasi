<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300i,400,400i,500,700,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <div class="container">
            <div class="col-md-4 col-sm-12 col-12">
                <a href="" class="navbar-brand text-white">LOGO</a>
            </div>
            <div class="col-md-4 col-12 text-center">
                <h2 class="my-md-3 site-title text-white">Aduan Siswa</h2>
            </div>
            <div class="col-md-4 col-12 text-right">
                <p class="my-md-4 header-links">
                    <a href="#" class="px-2 text-white">Login</a>
                    <a href="#" class="px-1 text-white">Register</a>
                </p>
            </div>
        </div>
    </div>


    <div class="hero">
        <div class="banner">
            <div class="left-column">
                <h1>Aduan<span>Siswa</span></h1>
                <h3>Layanan Aspirasi<span> SMK Jakarta Pusat 1</span>
                </h3>
                <p>
                    AduanSiswa adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloribus
                    eligendi molestiaseius, animi voluptatibus repellat
                </p>

                <div class="btn">
                    <a href="{{url('/tentang/kami')}}" class="button text-decoration-none">Tentang Kami</a>
                    <a href="{{url('/create/laporkan')}}" class="button text-decoration-none">Kirim Laporan</a>
                </div>
            </div>
            <div class="right-column">
                <img src="frontend/images/studentbg.jpg" class="img-fluid" alt="Responsive Image">
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="frontend/libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
