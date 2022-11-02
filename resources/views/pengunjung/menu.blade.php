<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Warung Maharrani | {{ $title }}</title>
    <style>
        /* body {
            height: 9000px;
        } */
        .warna-b {
            text-decoration: none;
            color: #217071 !important;
            }
        .warna {
            text-decoration: none;
            color: #094041 !important;
            font-size: 18px;
            font-weight: 450;
        }
        .warna :hover {
            color: #145b5c;
        }
        .imagewarna {
            color: green;
        }
        .imagewarna :hover {
            color: white;
        }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3  bg-body rounded shadow-sm p-3 mb-1 bg-body rounded">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="IMAGE/sosial media/logo.PNG" width="200" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item warna">
                <a class="nav-link {{ ($title === "Buku Menu") ? 'active' : '' }}" aria-current="page" href="#buku-menu"><i class="bi bi-inboxes"></i> Daftar Menu</a>
              </li>
              <li class="nav-item warna">
                <a class="nav-link" href="/reservasi"><i class="bi bi-calendar-plus"></i> Reservasi</a>
              </li>
              <li class="nav-item warna">
                <a class="nav-link" href="/maps"><i class="bi bi-pin-map"></i> Maps</a>
              </li>
              <li class="nav-item warna">
                <a class="nav-link" href="/profil"><i class="bi bi-shop"></i> Profil</a>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
           <!-- {{ $i = 0;}} -->
            @foreach ($promo as $pro )
            @if ($i == 0)
           <!-- {{ $aktif = "active" }} -->
            @else
           <!-- {{ $aktif = "" }} -->
            @endif
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}"class="{{$aktif}}"></button>
           <!-- {{ $i++ }} -->
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($promo as $pro )
            @if ($pro['keterangan'] > 'Prom')
                <div class="carousel-item active">
            @else
            <div class="carousel-item">
            @endif
            <img src="{{ asset('storage/' . $pro->image)}}" class="d-block w-100" alt="...">
        </div>

        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>








      <!-- MENU -->
      <div class="container mt-4" id="buku-menu">
          <div class="row ">
              <div class="col text-center">
                  <h4 style="display: block;" class="warna-b">DAFTAR MENU</h4>
                  <hr width="100px" style="display: inline-block;">
              </div>
          </div>
      </div>

      <!-- BUKU MENU -->
      <div class="container mt-3">
        @foreach ($buku as $buk )
        <div class="row mt-3">
            <div class="col">
                <img src="{{ asset('storage/' . $buk->image)}}" class="w-100" style="box-shadow:2px 2px 5px black;" alt="">
            </div>
        </div>
        @endforeach
      </div>

      <!-- footer -->
      <div class="section bg-light">
      <div class="container mt-5">
        <div class="row mt-5">
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row mb-5">
              <div class="col-md-4 mt-2">
                <h4>KONTAK</h4>
                <p>0857-5567-4894</p>
                <h3></h3>
                <a href="https://www.instagram.com/warungmaharrani/"><img src="image/sosial media/ig.png" height="50" alt=""></a>
                <a href="https://web.facebook.com/warungmaharranibwi/?_rdc=1&_rdr"><img src="image/sosial media/fb.jpg" height="50" alt=""></a>
            </div>
            <div class="col-md-4 mt-2">
                <h4>ALAMAT</h4>
                <p>Jalan Songgon
                    Gentengan, Singolatren, Singojuruh <br>
                    Cermean Kidul <br>
                    Singolatren <br>
                    Singojuruh <br>
                    Kabupaten Banyuwangi <br>
                    Jawa Timur 68464 <br>
                    Indonesia</p>
            </div>
            <div class="col-md-4 mt-2">
                <h4>JAM BUKA</h4>
                <p>Senin     :	09.00–22.00 <br>
                    Selasa   :	09.00–22.00 <br>
                    Rabu     :	09.00–22.00 <br>
                    Kamis    :	09.00–22.00 <br>
                    Jum’at   :	09.00–22.00 <br>
                    Sabtu    :	09.00–22.00 <br>
                    Minggu   :	09.00–22.00 <br>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <p>Copyright @ 2022 <span style="color: #DBBEB9;">Warung</span> <span style="color: #198754;">Maharrani</span>. All right reserved</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-end fixed-bottom mb-1">
                <a href="https://api.whatsapp.com/send/?phone=6285755674894&text&app_absent=0"><img src="image/sosial media/wa.png" width="80" alt=""></a>
            </div>
        </div>
      </div>
      </div>


    </div>




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
