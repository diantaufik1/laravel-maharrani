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
                  <a class="nav-link " aria-current="page" href="/"><i class="bi bi-inboxes"></i> Daftar Menu</a>
                </li>
                <li class="nav-item warna">
                  <a class="nav-link" href="/reservasi"><i class="bi bi-calendar-plus"></i> Reservasi</a>
                </li>
                <li class="nav-item warna">
                  <a class="nav-link {{ ($title === "Maps") ? 'active' : '' }}" href="/maps"><i class="bi bi-pin-map"></i> Maps</a>
                </li>
                <li class="nav-item warna">
                  <a class="nav-link " href="/profil"><i class="bi bi-shop"></i> Profil</a>
                </li>
              </ul>
          </div>
        </div>
        </div>
      </nav>

      <!-- maps -->
      <div class="container mt-3 mb-5">
          <div class="row">
              <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.23167822594!2d114.24637131395569!3d-8.279725685530629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd151652dfa5baf%3A0xd4447774804f21c3!2sWarung%20Maharrani!5e0!3m2!1sid!2sid!4v1645852181558!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
                <h3 style="display: block;" class="warna-b"><span style="color: #198754;">Warung Maharrani</span>.</h3>
                <hr width="250px" style="display: inline-block;">
            </div>
            </div>
            <div class="row px-4">
               <div class="col">
                <tr>
                  <td>Alamat</td>
                  <td>: </td>
                  <td></td>
                  <td>Jalan Songgon
                   Gentengan, Singolatren, <br> Singojuruh
                   Cermean Kidul
                   Singolatren
                   Singojuruh <br>
                   Kabupaten Banyuwangi
                   Jawa Timur 68464
                   Indonesia</td>
                </tr>
               </div>
            </div>
            <div class="row px-4 mt-3">
              <div class="col">
                <button type="button" class="btn btn-success"><a href="https://g.page/maharrani?share" target="_blank" style="text-decoration: none; color: white;">Lihat Rute</a></button>
              </div>
            </div>
      </div>


      <!-- footer -->
      <div class="section bg-light mt-5">
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
