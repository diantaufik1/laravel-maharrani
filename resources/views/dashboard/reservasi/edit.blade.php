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

      <!-- reservasi -->
      <div class="container mt-2 p-2">
          <div class="row p-2">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/reservasidata/{{ $edit->id }}">
                        @method('put')
                        @csrf
                    <div class="col p-3">
                        <h3 class="pb-3">Edit Reservasi Online</h3>

                        <div class="mb-3">
                            <input type="text" name="nama_pemesan" class="form-control @error('nama_pemesan') is-invalid @enderror" id="exampleFormControlInput1" value="{{ $edit->nama_pemesan }}" placeholder="Nama Pemesan.." required>
                            @error('nama_pemesan')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                        <div class="input-group mb-3">
                            <select class="form-select @error('tamu') is-invalid @enderror" name="tamu" id="inputGroupSelect02" value="" required>
                                <option value="rapat" {{$edit->tamu == "rapat" ? 'selected' : ''}}>Rapat</option>
                                <option value="pegawai negeri sipil" {{$edit->tamu == "pegawai negeri sipil" ? 'selected' : ''}}>Pegawai Negeri Sipil</option>
                                <option value="pegawai negeri swasta" {{$edit->tamu == "pegawai negeri swasta" ? 'selected' : ''}}>Pegawai Negeri Swasta</option>
                                <option value="keluarga" {{$edit->tamu == "keluarga" ? 'selected' : ''}}>Keluarga</option>
                                <option value="perorangan" {{$edit->tamu == "perorangan" ? 'selected' : ''}}>Perorangan</option>
                                <option value="dll" {{$edit->tamu == "dll" ? 'selected' : ''}}>DLL</option>
                            </select>
                            @error('tamu')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          <div class="mb-3 instansi">
                            <input type="text" name="instansi" class="form-control" id="exampleFormControlInput1" value="{{ $edit->instansi }}" placeholder="Nama Instansi..">
                          </div>
                          <div class="input-group mb-3">
                            <input type="number" name="jumlah_tamu" min="1" max="100" class="form-control @error('jumlah_tamu') is-invalid @enderror" value="{{ $edit->jumlah_tamu }}" placeholder="Jumlah Tamu" required>
                            @error('jumlah_tamu')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                          <div class="input-group mb-3 w-90">
                            <select class="form-select @error('lokasi_meja') is-invalid @enderror" name="lokasi_meja" id="inputGroupSelect02" required>
                              <option >Lokasi Meja...</option>
                              <option value="Depan Kasir" {{$edit->lokasi_meja == "Depan Kasir" ? 'selected' : ''}}>Depan Kasir</option>
                              <option value="Gazebo Depan Dapur" {{$edit->lokasi_meja == "Gazebo Depan Dapur" ? 'selected' : ''}}>Gazebo Depan Dapur</option>
                              <option value="Kolam Apung" {{$edit->lokasi_meja == "Kolam Apung" ? 'selected' : ''}}>Kolam Apung</option>
                              <option value="Kolam Apung 1" {{$edit->lokasi_meja == "Kolam Apung 1" ? 'selected' : ''}}>Kolam Apung 1</option>
                              <option value="Lantai II.1" {{$edit->lokasi_meja == "Lantai II.1" ? 'selected' : ''}}>Lantai II.1</option>
                              <option value="Lantai II.PHOTOSPHERE" {{$edit->lokasi_meja == "Lantai II.PHOTOSPHERE" ? 'selected' : ''}}>Lantai II.PHOTOSPHERE</option>
                              <option value="Pemandangan Kolam" {{$edit->lokasi_meja == "Pemandangan Kolam" ? 'selected' : ''}}>Pemandangan Kolam</option>
                              <option value="Pinggir Sungai" {{$edit->lokasi_meja == "Pinggir Sungai" ? 'selected' : ''}}>Pinggir Sungai</option>
                              <option value="Pinggir sungai II" {{$edit->lokasi_meja == "Pinggir sungai II" ? 'selected' : ''}}>Pinggir sungai II</option>
                              <option value="Pinggir Sungai III" {{$edit->lokasi_meja == "Pinggir Sungai III" ? 'selected' : ''}}>Pinggir Sungai III</option>
                              <option value="Pinggir Sungai Belakang Dapur" {{$edit->lokasi_meja == "Pinggir Sungai Belakang Dapur" ? 'selected' : ''}}>Pinggir Sungai Belakang Dapur</option>
                              <option value="Pinggir Sungai Belakang Dapur II" {{$edit->lokasi_meja == "Pinggir Sungai Belakang Dapur II" ? 'selected' : ''}}>Pinggir Sungai Belakang Dapur II</option>
                            </select>
                            @error('lokasi_meja')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                          <div class="input-group mb-3">
                            <input type="text" name="tanggal_jam" class="form-control @error('tanggal_jam') is-invalid @enderror" id="picker" value="{{ $edit->tanggal_jam }}" placeholder="Tanggal & Jam" required>
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
    </script>
</body>
</html>
