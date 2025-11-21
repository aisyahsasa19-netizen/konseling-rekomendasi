<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* WARNA TEKS SAAT HOVER (PAKSA TETAP HITAM) */
.dropdown-menu a:hover {
    color: black !important;
     background-color: transparent !important;
}
/* WARNA TEKS NORMAL */
.dropdown-menu a {
    color: black !important;
    text-decoration: none;
}

</style>
</head>
<ul class="nav">

    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
    <li class="nav-item"><a class="nav-link" href="kriteria.php">Kriteria</a></li>
    <li class="nav-item"><a class="nav-link" href="identitas.php">Data Siswa</a></li>
    <li class="nav-item"><a class="nav-link" href="data.php">Nilai Kriteria</a></li>
    <li class="nav-item"><a class="nav-link" href="rank.php">Daftar Prioritas</a></li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Input Data
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="input_identitas.php">Data Identitas</a></li>
            <li><a class="dropdown-item" href="input_matriks.php">Data Matriks</a></li>
        </ul>
    </li>
</ul>
