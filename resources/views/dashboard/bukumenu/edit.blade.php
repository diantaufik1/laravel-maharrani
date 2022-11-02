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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/bukumenudata/{{ $edit->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="input-group mb-3">
                                <input type="hidden" name="oldImage" value="{{ $edit->image }}">
                                @if ($edit->image)
                                <img src="{{ asset('storage/'. $edit->image) }}"  class="img-preview img-fluid mb-2 col-sm-5">
                                @else
                                <img class="img-preview img-fluid mb-2 col-sm-5">
                                @endif

                            </div>
                            <div class="input-group mb-3">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image"  onchange="previewImage()">
                                <label class="input-group-text" for="inputGroupFile02"><i class="bi bi-arrow-bar-up"></i></label>
                                @error('image')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $edit->keterangan }}" placeholder="Keterangan. .">
                                @error('keterangan')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="input-group mb-3">
                                <input type="number" name="urutan" class="form-control @error('urutan') is-invalid @enderror" value="{{ $edit->urutan }}" placeholder="urutan. .">
                                @error('urutan')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                                    </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
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



        function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    </script>
</body>
</html>
