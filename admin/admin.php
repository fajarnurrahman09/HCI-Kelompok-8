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
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Favicon-->
  <link rel="icon" type="image/png" href="../images/Logo DB.png">
  <!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

  <!-- custom CSS -->
  <link rel="stylesheet" href="../css/sidebars.css">
</head>

<body>
  <!-- cek apakah sudah login -->
  <?php
  session_start();
  if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
  }
  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DESA BINAAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="admin" href="admin.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Input Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./pages/sarpras.php">Divisi SARPRAS</a></li>
              <li><a class="dropdown-item" href="./pages/kurikulum.php">Divisi KURIKULUM</a></li>
              <li><a class="dropdown-item" href="./pages/infokom.php">Divisi INFOKOM</a></li>
              <li><a class="dropdown-item" href="">KADESWAKADES</a></li>
              <li><a class="dropdown-item" href="./kurikulum.php">Divisi PSDM</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mail.php">E-Mail</a>
          </li>
        </ul>
        <span class="navbar-text">
          <button type="button" class="btn btn-outline-danger btn-sm"><a href="logout.php">logout</a></button>
        </span>
      </div>
    </div>
  </nav>
  <div class="container">
    <h4>Hi <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->




</body>

</html>