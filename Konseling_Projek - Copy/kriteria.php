<?php
include "koneksi.php";  // Memanggil file koneksi

// Query ambil data tabel kriteria
$sql = "SELECT * FROM kriteria ORDER BY idkriteria ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

 <?php
 include "komponen/header.php";
?>

 <style>
/* Membuat kontainer tabel rapi dan berada di tengah */
.table-container {
    display: flex;
    justify-content: center;
    margin-top: 40px;
}

/* Tabel modern */
.modern-table {
    width: 80%;
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    border: none;
}

/* 🎨 Header tabel warna gradasi seperti navbar (peach → pink) */
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

/* 🎨 Striping warna lembut agar senada */
.modern-table tr:nth-child(even) td {
    background: #fff3ff;  /* pink muda */
}

.modern-table tr:nth-child(odd) td {
    background: #fff9f4; /* peach muda */
}

/* Hover row */
.modern-table tr:hover td {
    background: #ffe9ff !important;
    transition: 0.25s;
}

/* Row terakhir tanpa border */
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
            <h1>Data Kriteria</h1>

<div class="table-container"> 
  <table class="modern-table"> 
    <tr>
       <th>ID Kriteria</th> 
       <th>Nama Kriteria</th> 
          </tr>

    

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['idkriteria'] . "</td>";
            echo "<td>" . $row['namakriteria'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
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
              mulai dari kelas X sampai kelas XII. </p>
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

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
    
</body>
</html>