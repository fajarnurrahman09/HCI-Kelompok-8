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

  <h2>Halaman Admin</h2>

  <br />

  <!-- cek apakah sudah login -->
  <?php
  session_start();
  if ($_SESSION['status'] != "login") {
    header("location:../login.php?pesan=belum_login");
  }
  ?>

  <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

  <br />
  <br />

  <a href="logout.php">LOGOUT</a>

</body>

</html>