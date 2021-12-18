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

    <div class="container-fluid">
        <section class="input-data">
            <!-- Tabel SARPRAS -->
            <div class="container">
                <div class="row"></div>
                <h1>Tabel Jadwal dan Event</h1>

                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Event</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th scope="row">1</th>
                                <td><img src="gambar/<?php echo $data['foto'] ?>" style="width: 120px;" alt=""></td>
                                <td>nama events</td>
                                <td> deskripsi</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#eventmodaledit<?php echo $data['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i>edit</button>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <!-- Modal Edit -->
                            <div class="modal fade" id="eventmodaledit<?php echo $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eventmodaleditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="eventmodaleditLabel">Edit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" enctype="multipart/form-data">

                                                <div class="mb-3">
                                                    <input type="hidden" name="id" value="<?php echo $data_edit['id'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="divisi-name" class="col-form-label">Proker:</label>
                                                    <input type="text" name="nama" class="form-control" id="recipient-name" value="<?php echo $data_edit['nama'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description-text" class="col-form-label">Description Proker:</label>
                                                    <textarea class="form-control" name="deskripsi" id="message-text"><?php echo $data_edit['deskripsi'] ?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="foto">Upload Image</label>
                                                    <input type="file" name="foto" id="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eventmodal">Create</button>
                </div>

                <!-- Modal Create -->
                <div class="modal fade" id="eventmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eventmodalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eventmodalLabel">Divisi SARPRAS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="divisi-name" class="col-form-label">Proker:</label>
                                        <input type="text" name="nama" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description-text" class="col-form-label">Description Proker:</label>
                                        <textarea class="form-control" name="deskripsi" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto">Upload Image</label>
                                        <input type="file" name="foto" id="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="simpan" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>
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