@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Promo</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
    </div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-md-8">
            <div class="table-responsive">
                @if (session()->has('Success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('Success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($promo as $pro )
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td><img src="{{ asset('storage/' . $pro->image)}}" style="max-height: 80px" alt=""></td>
                      <td>{{ $pro->keterangan }}</td>
                      <td><form action="/promo1" method="POST">
                        @csrf
                            <input type="hidden" name="id" value="{{ $pro->id }}">
                            <input type="number" min="0" max="100" class="@error('urutandata') is-invalid @enderror" name="urutandata" value="{{ $pro->urutan }}" style="width: 40px">
                            <button type="submit" style="border: none; background: transparent;"></button>
                          </form></td>
                      <td><a href="promo/{{ $pro->id }}/edit" class="btn btn-warning btn-sm mb-1"><i class="bi bi-pencil-square"></i></a>
                        <form action="/promo/{{$pro->id}}" method="post" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                        <button type="submit" class="btn btn-sm mb-1 btn-danger" onclick="return confirm('yakin?');"><i class="bi bi-trash-fill"></i></button></td>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>

          <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/promo" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <img class="img-preview img-fluid mb-2">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage()">
                            <label class="input-group-text" for="inputGroupFile02"><i class="bi bi-arrow-bar-up"></i></label>
                            @error('image')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan. .">
                            @error('keterangan')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="input-group mb-3">
                            <input type="number" name="urutan" class="form-control @error('urutan') is-invalid @enderror" placeholder="urutan. .">
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

  <script>
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

@endsection
