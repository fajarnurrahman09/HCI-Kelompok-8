<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- google font -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Favicon-->
  <link rel="icon" type="image/png" href="../images/Logo DB.png">
  <!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
</head>

<body>
  <div class="container ">
    <nav class="navbar nav justify-content-center">
      <a class="navbar-brand" href="index.php"><img src="../images/Logo DB.png" alt="db" width="150px"></a>
    </nav>
  </div>

  <div class="container ">
    <nav class="navbar nav justify-content-center">
      <span class="navbar-brand mb-0 h1">Login Admin</span>
    </nav>
  </div>

  <div class="container border">
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <form action="proseslogin.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
          </div>
          <div class="form-group ">
            <label for="inputPassword2" class="visually-hidden">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword2" placeholder="Password">
          </div>
          <nav class="navbar nav justify-content-center"></nav>
          <button name="submit" class="btn btn-primary " type="submit">Login</button>
          </nav>
        </form>
      </div>
      <div class="col-lg-4"></div>
    </div>

  </div>




</body>

</html>