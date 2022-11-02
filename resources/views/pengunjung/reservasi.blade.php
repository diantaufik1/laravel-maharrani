<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                  <a class="nav-link {{ ($title === "Reservasi") ? 'active' : '' }}" href="/reservasi"><i class="bi bi-calendar-plus"></i> Reservasi</a>
                </li>
                <li class="nav-item warna">
                  <a class="nav-link" href="/maps"><i class="bi bi-pin-map"></i> Maps</a>
                </li>
                <li class="nav-item warna">
                  <a class="nav-link " href="/profil"><i class="bi bi-shop"></i> Profil</a>
                </li>
              </ul>
          </div>
        </div>
        </div>
      </nav>

      <!-- reservasi -->
      <div class="container mt-2 p-2">
        <div class="row text-center">
         <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Depan Kasir.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Depan Kasir</p>
          </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Gazebo Depan Dapur.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Gazebo Depan Dapur</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Kolam Apung.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Kolam Apung</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Kolam Apung 1.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Kolam Apung 1</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Lantai II.1.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Lantai II.1</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Lantai II.PHOTOSPHERE.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Lantai II.PHOTOSPHERE</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Pemandangan Kolam.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Pemandangan Kolam</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Pinggir Sungai.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Pinggir Sungai</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Pinggir sungai II.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Pinggir sungai II</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Pinggir Sungai III.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Pinggir Sungai III</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Pinggir Sungai Belakang Dapur.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Pinggir Sungai Belakang Dapur</p>
           </div>
          <div class="col-md-2 col-4">
            <img src="{{ asset('public/IMAGE/meja/Pinggir Sungai Belakang Dapur II.jpg') }}" class="img-thumbnail" width="120" alt="">
            <p class="badge bg-primary text-wrap" style="width: 6rem;">Pinggir Sungai Belakang Dapur II</p>
           </div>



        </div>

        <div class="row p-2">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/reservasidata">
                        @csrf
                    <div class="col p-3">
                        <h3 class="pb-3">Reservasi Online</h3>

                        <div class="mb-3">
                            <input type="text" name="nama_pemesan" class="form-control @error('nama_pemesan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nama Pemesan.." required>
                            @error('nama_pemesan')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                        <div class="input-group mb-3 tamu">
                            <select onchange="ontamu(this.value)" class="form-select @error('tamu') is-invalid @enderror" name="tamu" id="inputGroupSelect02" required>
                              <option selected value="rapat">Rapat</option>
                              <option value="pegawai negeri sipil">Pegawai Negeri Sipil</option>
                              <option value="pegawai negeri swasta">Pegawai Negeri Swasta</option>
                              <option value="keluarga">Keluarga</option>
                              <option value="perorangan">Perorangan</option>
                              <option value="dll">DLL</option>
                            </select>
                            @error('tamu')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="mb-3 instansi">
                            <input type="text" name="instansi" class="form-control" id="exampleFormControlInput1" placeholder="Nama Instansi..">
                          </div>

                          <div class="input-group mb-3">
                            <input type="number" name="jumlah_tamu" min="1" max="100" class="form-control @error('jumlah_tamu') is-invalid @enderror" placeholder="Jumlah Tamu" required>
                            @error('jumlah_tamu')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                          <div class="input-group mb-3 w-90">
                            <select class="form-select @error('lokasi_meja') is-invalid @enderror" name="lokasi_meja" id="inputGroupSelect02" required>
                              <option selected>Lokasi Meja...</option>
                              <option value="Depan Kasir">Depan Kasir</option>
                              <option value="Gazebo Depan Dapur">Gazebo Depan Dapur</option>
                              <option value="Kolam Apung">Kolam Apung</option>
                              <option value="Kolam Apung 1">Kolam Apung 1</option>
                              <option value="Lantai II.1">Lantai II.1</option>
                              <option value="Lantai II.PHOTOSPHERE">Lantai II.PHOTOSPHERE</option>
                              <option value="Pemandangan Kolam">Pemandangan Kolam</option>
                              <option value="Pinggir Sungai">Pinggir Sungai</option>
                              <option value="Pinggir sungai II">Pinggir sungai II</option>
                              <option value="Pinggir Sungai III">Pinggir Sungai III</option>
                              <option value="Pinggir Sungai Belakang Dapur">Pinggir Sungai Belakang Dapur</option>
                              <option value="Pinggir Sungai Belakang Dapur II">Pinggir Sungai Belakang Dapur II</option>
                            </select>
                            @error('lokasi_meja')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                          <div class="input-group mb-3">
                            <input type="text" name="tanggal_jam" class="form-control @error('tanggal_jam') is-invalid @enderror" id="picker" placeholder="Tanggal & Jam" required>
                            <button class="btn btn-outline-secondary" type="button" id="toggle"><i class="bi bi-calendar3"></i></button>
                            @error('tanggal_jam')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                          <button class="btn btn-success" type="submit">PESAN SEKARANG</button>
                      </div>
                    </form>
                </div>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js" integrity="sha512-hlLgIh4nncb2yc4YPtWk5wOykcFxF0fBd5rHfJ6xsALI2khY3H8LbivswJE5Fpz7hws7CJCqOzdyjWHiKJYl+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>

        jQuery.datetimepicker.setDateFormatter('moment')
        $('#picker').datetimepicker({
            timepicker: true,
            datepicker: true,
            format: 'YYYY-MM-DD h:mm a'
        })
        $('#toggle').on('click', function() {
            $('#picker').datetimepicker('toggle')
        })

        function ontamu(x)
        {
            const instansi = document.querySelectorAll(".instansi");
            instansi.forEach(inst =>
            {
                let input = inst.querySelector("input");
                input.disabled = false;
                    if(x == "keluarga" || x == "perorangan"){
                        input.disabled = true;
                    }else{
                        input.disabled = false;
                    }
            })
        }

    </script>
</body>
</html>
