<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Absensi Digital · Login Page</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="{{asset('template/')}}/dist/css/adminlte.css" rel="stylesheet">

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
  <link href="{{asset('template/')}}/dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form action="/process_login" method="post">
      @csrf
      <img class="mb-4" src="{{asset('template/')}}/dist/img/LogoKIP_AcehTengah-min.png" alt="" width="45%" height="45%">
      <h1 class="h3 mb-3 fw-normal">Absensi Digital</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="password">
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy;2022</p>
    </form>
  </main>

</body>

</html>