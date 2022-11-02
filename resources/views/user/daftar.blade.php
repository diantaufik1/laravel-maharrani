<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Warung Maharrani | {{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/signin.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

  <main class="form-signin">
    <form action="/daftar" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-normal">DAFTAR AKUN</h1>

      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback text-start">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="Username" placeholder="Username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback text-start">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback text-start">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback text-start">
            {{ $message }}
        </div>
        @enderror
      </div>

      <button class="w-100 btn btn-lg btn-success" type="submit">Daftar</button>
    </form>
    <small>Sudah Punya Akun? <a href="/login">Login Sekarang!</a></small>
  </main>

  </body>
</html>

