<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="sendiri.css">
  <title>Register</title>

</head>
<body>
  <div class="justify-content-center text-center">
    <img src="logo.jpg">
     <h2 class=" fw-bold fs-5">SELAMAT DATANG DI ADMIN TECHNOPARK GALLERY<br> SMKN 2 BANJARMASIN</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <form class="register" method="post" action="/regis">
            @csrf
            <h4 class="text-center mb-2">REGISTER</h4>
            <hr>
            <div class="mb-4">
              <!--input-->
              <input type="text" class="form-control borderinput" placeholder="Username" name="name"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-4">
              <input type="text" class="form-control borderinput" placeholder="Email" name="email"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control borderinput" placeholder="Password" name="password"
                id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control borderinput" placeholder="Konfirmasi Passwoard" name="password"
                id="exampleInputPassword1">
            </div>
            <!--akhir input-->
            <div class="d-grid gap-2 justify-content-md-end">
              <button type="submit" class="btn btn-outline-light">register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>