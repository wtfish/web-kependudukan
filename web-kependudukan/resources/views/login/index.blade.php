<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">





    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg">

<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <img class="mb-4" src="/assets/icon.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email"class="form-control @error('email')
        is-invalid
      @enderror" id="email" placeholder="name@example.com" autofocus required>
      <label for="email">Email address</label>
      @error('email')
            <div class="text-danger">
                {{$message}}
            </div>
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password"class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>



  </body>
</html>
