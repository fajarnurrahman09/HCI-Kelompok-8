<?php include '../koneksi.php'; ?>
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
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="../../images/Logo DB.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">



    <!-- custom CSS -->
    <link rel="stylesheet" href="../../css/sidebars.css">
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
                        <a class="nav-link active" aria-current="admin" href="../admin.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Input Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./kadeswakades.php">KADESWAKADES</a></li>
                            <li><a class="dropdown-item" href="./sekre.php">Sekertaris</a></li>
                            <li><a class="dropdown-item" href="./bendahara.php">Bendahara</a></li>
                            <li><a class="dropdown-item" href="./infokom.php">Divisi INFOKOM</a></li>
                            <li><a class="dropdown-item" href="./psdm.php">Divisi PSDM</a></li>
                            <li><a class="dropdown-item" href="./mp.php">Manajemen Program</a></li>
                            <li><a class="dropdown-item" href="./sarpras.php">SubDivisi SARPRAS</a></li>
                            <li><a class="dropdown-item" href="./kurikulum.php">SubDivisi KURIKULUM</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../event.php">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../mail.php">E-Mail</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button type="button" class="btn btn-outline-danger btn-sm"><a href="../logout.php">logout</a></button>
                </span>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <section class="input-data">
            <!-- Tabel SARPRAS -->
            <div class="container">
                <h1>Tabel Proker divisi KADESWAKADES</h1>
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Description</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = $koneksi->query("select * from tabel_dkadeswakades");
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <tr class="table-active">
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><img src="gambar/<?php echo $data['foto'] ?>" style="width: 120px;" alt=""></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['deskripsi'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#kadeswakadesmodaledit<?php echo $data['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i>edit</button>
                                        <a href="../buttondelete/DLTkadeswakades.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <!-- Modal Edit -->
                                <!-- Modal Edit -->
                                <div class="modal fade" id="infokommodaledit<?php echo $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="infokommodaleditLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="infokommodaleditLabel">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <?php
                                                    $id = $data['id'];
                                                    $sql_edit = $koneksi->query("select * from tabel_dinfokom where id = '$id' ");
                                                    while ($data_edit = $sql_edit->fetch_assoc()) {
                                                    ?>
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
                                                    <?php } ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                            <?php

                            if (isset($_POST['ubah'])) {
                                $id = $_POST['id'];
                                $nama = $_POST['nama'];
                                $deskripsi = $_POST['deskripsi'];
                                $image = $_FILES['foto']['name'];

                                //cek dulu jika ada gambar produk jalankan coding ini
                                if ($image != "") {
                                    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
                                    $x = explode('.', $image); //memisahkan nama file dengan ekstensi yang diupload
                                    $ekstensi = strtolower(end($x));
                                    $file_tmp = $_FILES['foto']['tmp_name'];

                                    $nama_gambar_baru = $image; //menggabungkan angka acak dengan nama file sebenarnya
                                    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                                        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                                        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                                        $query = "UPDATE tabel_dkadeswakades SET nama = '$nama', deskripsi = '$deskripsi', foto = '$nama_gambar_baru' WHERE id = '$id'";
                                        $result = mysqli_query($koneksi, $query);
                                        // periska query apakah ada error
                                        if (!$result) {
                                            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                                                " - " . mysqli_error($koneksi));
                                        } else {
                                            //tampil alert dan akan redirect ke halaman index.php
                                            //silahkan ganti index.php sesuai halaman yang akan dituju
                                            echo "<script>alert('Data berhasil diedit.');window.location='kadeswakades.php';</script>";
                                        }
                                    } else {
                                        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='kadeswakades.php';</script>";
                                    }
                                } else {
                                    $query = "UPDATE tabel_dkadeswakades SET nama = '$nama', deskripsi = '$deskripsi' WHERE id = '$id'";
                                    $result = mysqli_query($koneksi, $query);
                                    // periska query apakah ada error
                                    if (!$result) {
                                        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                                            " - " . mysqli_error($koneksi));
                                    } else {
                                        //tampil alert dan akan redirect ke halaman index.php
                                        //silahkan ganti index.php sesuai halaman yang akan dituju
                                        echo "<script>alert('Data berhasil diedit.');window.location='kadeswakades.php';</script>";
                                    }
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kadeswakadesmodal">Create</button>
                </div>

                <!-- Modal Create -->
                <div class="modal fade" id="kadeswakadesmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="kadeswakadesmodalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="kadeswakadesmodalLabel">Divisi KADESWAKADES</h5>
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
            <!-- Create Sarpras -->
            <?php

            if (isset($_POST['simpan'])) {
                $nama = $_POST['nama'];
                $deskripsi = $_POST['deskripsi'];
                $image = $_FILES['foto']['name'];

                //cek dulu jika ada gambar produk jalankan coding ini
                if ($image != "") {
                    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
                    $x = explode('.', $image); //memisahkan nama file dengan ekstensi yang diupload
                    $ekstensi = strtolower(end($x));
                    $file_tmp = $_FILES['foto']['tmp_name'];
                    $angka_acak     = rand(1, 999);
                    $nama_gambar_baru = $angka_acak . '-' . $image; //menggabungkan angka acak dengan nama file sebenarnya
                    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                        $query = "INSERT INTO tabel_dkadeswakades (nama, deskripsi, foto) VALUES ('$nama','$deskripsi','$nama_gambar_baru')";
                        $result = mysqli_query($koneksi, $query);
                        // periska query apakah ada error
                        if (!$result) {
                            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                                " - " . mysqli_error($koneksi));
                        } else {
                            //tampil alert dan akan redirect ke halaman index.php
                            //silahkan ganti index.php sesuai halaman yang akan dituju
                            echo "<script>alert('Data berhasil ditambah.');window.location='kadeswakades.php';</script>";
                        }
                    } else {
                        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='kadeswakades.php';</script>";
                    }
                } else {
                    $query = "INSERT INTO tabel_dkadeswakades (nama, deskripsi, foto) VALUES ('$nama', '$deskripsi', null)";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if (!$result) {
                        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                            " - " . mysqli_error($koneksi));
                    } else {
                        //tampil alert dan akan redirect ke halaman index.php
                        //silahkan ganti index.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil ditambah.');window.location='kadeswakades.php';</script>";
                    }
                }
            }

            ?>
        </section>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="../../js/bootstrap.bundle.min.js"></script>


</body>

</html>