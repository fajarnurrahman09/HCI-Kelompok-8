<?php
$headpage;
?>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom sticky-top" style="margin-bottom: 0px!important; justify-content: center!important;">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" style="align-items: center; margin-bottom: 0px!important; padding: 8px 16px; font-size: 18px; font-weight: 500;">
            <img src="images/Logo DB.png" width="50" height="50" alt="">
            <span class="fs-4">Desa Binaan FMIPA</span>
        </a>

        <ul class="nav nav-pills" style="align-items: center;">

            <?php if ($headpage == "Home") { ?>
                <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page" style="margin-right: 16px; margin-left: 16px; background-color: #AA7DCE">Beranda</a></li>

            <?php }
            if ($headpage != "Home") { ?>
                <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Beranda</a></li>

            <?php }
            if ($headpage == "About") { ?>
                <li class="nav-item"><a href="about.php" class="nav-link active" aria-current="page" style="margin-right: 16px; margin-left: 16px; background-color: #AA7DCE">Tentang Kami</a></li>

            <?php }
            if ($headpage != "About") { ?>
                <li class="nav-item"><a href="about.php" class="nav-link" aria-current="page">Tentang Kami</a></li>

            <?php }
            if ($headpage == "Struktur") { ?>
                <li class="nav-item"><a href="struktur.php" class="nav-link active" aria-current="page" style="margin-right: 16px; margin-left: 16px; background-color: #AA7DCE">Struktur</a></li>

            <?php }
            if ($headpage != "Struktur") { ?>
                <li class="nav-item"><a href="struktur.php" class="nav-link" aria-current="page">Struktur</a></li>

            <?php }
            if ($headpage == "Proker") { ?>
                <li class="nav-item"><a href="proker.php" class="nav-link active" aria-current="page" style="margin-right: 16px; margin-left: 16px; background-color: #AA7DCE">Program Kerja</a></li>

            <?php }
            if ($headpage != "Proker") { ?>
                <li class="nav-item"><a href="proker.php" class="nav-link" aria-current="page">Program Kerja</a></li>

            <?php }
            if ($headpage == "Jadwal") { ?>
                <li class="nav-item"><a href="jadwal.php" class="nav-link active" aria-current="page" style="margin-right: 16px; margin-left: 16px; background-color: #AA7DCE">Jadwal</a></li>

            <?php }
            if ($headpage != "Jadwal") { ?>
                <li class="nav-item"><a href="jadwal.php" class="nav-link" aria-current="page">Jadwal</a></li>
            <?php } ?>
        </ul>
    </header>
</div>