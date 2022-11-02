@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Reservasi</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="export" class="btn btn-sm btn-outline-secondary">Export</a>
      </div>
    </div>
  </div>

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
          <th scope="col">Nama Pemesan</th>
          <th scope="col">Tamu</th>
          <th scope="col">Instansi</th>
          <th scope="col">Jumlah Tamu</th>
          <th scope="col">Lokasi Meja</th>
          <th scope="col">Tanggal & Jam</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($reservasi as $res)
        <tr>
          <td>{{ $loop->iteration  }}</td>
          <td>{{ $res->nama_pemesan }}</td>
          <td>{{ $res->tamu }}</td>
          <td>{{ $res->instansi }}</td>
          <td>{{ $res->jumlah_tamu }}</td>
          <td>{{ $res->lokasi_meja }}</td>
          <td>{{ $res->tanggal_jam }}</td>
          <td>
            <a href="reservasidata/{{ $res->id }}/edit" class="btn btn-warning btn-sm mb-1"><i class="bi bi-pencil-square"></i></a>
            <form action="/reservasidata/{{$res->id}}" method="post">
                @method('delete')
                @csrf
            <button type="submit" class="btn btn-sm mb-1 btn-danger" onclick="return confirm('yakin?');"><i class="bi bi-trash-fill"></i></button></td>
            </form></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
