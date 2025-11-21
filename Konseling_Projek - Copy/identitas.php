<?php
include "koneksi.php";   // panggil koneksi

// Query ambil data tabel identitas
$sql = "SELECT * FROM identitas ORDER BY ididentitas ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

 <?php
 include "komponen/header.php";
?>

 <style>
.table-container {
    display: flex;
    justify-content: center;
    margin-top: 40px;
}

.modern-table {
    width: 80%;
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    border: none;
}

/* 🎨 Header tabel dengan warna gradient seperti navbar */
.modern-table th {
    background: linear-gradient(90deg, #f6bc9b, #d87ed6);
    color: white;
    font-weight: bold;
    padding: 14px;
    text-align: center;
    font-size: 16px;
}

/* Isi tabel */
.modern-table td {
    padding: 12px;
    font-size: 15px;
    color: #333;
    border-bottom: 1px solid #e0e0e0;
}

/* Hover effect */
.modern-table tr:hover td {
    background: #faf5ff;
    transition: 0.2s;
}

/* Remove border on last row */
.modern-table tr:last-child td {
    border-bottom: none;
}
</style>


 

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.html" class="logo">
                      
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                        <?php
                      include "komponen/menu.php"; 
                      ?>
                  <!-- ***** Menu End ***** -->
                </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>Sistem Rekomendasi</h4>
            <h1>Data Identitas Siswa</h1>

<div class="table-container">
<table class="modern-table">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nis'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['kelas'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4' style='text-align:center;'>Tidak ada data</td></tr>";
    }
    ?>
</table>
</div>

          </div>
        </div>
      </div>
    </div>
  </section>

<section class="contact-us our-office">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-info">
            <div class="section-heading">
              <h4>SMA Negeri 1 <em>Tuban</em></h4>
            </div>
            <p>SMA Negeri 1 Tuban, merupakan salah satu 
              Sekolah Menengah Atas Negeri yang berada di Kabupaten Tuban, Jawa Timur, Indonesia.
              Sekolah ini berdiri sejak 1961. Sama dengan SMA pada umumnya di Indonesia, 
              masa pendidikan sekolah di SMAN 1 Tuban ditempuh dalam waktu tiga tahun pelajaran, 
              mulai dari kelas X sampai kelas XII.</p>
            <div class="main-button-gradient">
              <a href="https://smansatuban.sch.id/news/">SMA Negeri 1 Tuban</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="video">
            <div class="thumb">
              <img src="assets/images/sma1.jpg" alt="">
              <div class="play-button">
                <a rel="nofollow" href="https://youtu.be/LIx9iH-IZ6w?si=bH3NtiYM7GW7DeQF" target="_blank"><i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="https://x.com/SacrificeSmansa?t=QDNxGi1P1khvRgD4RtI1UQ&s=08"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/smansatuban.official?igsh=MW5oenB3c3VkcXlnbQ=="><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">SMA Negeri 1 Tuban 
        </div>
      </div>
    </div>
  </section>