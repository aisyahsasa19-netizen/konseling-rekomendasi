<?php
include "koneksi.php";  // Memanggil file koneksi

// Ambil data identitas
$q_identitas = mysqli_query($conn, "SELECT ididentitas, nama FROM identitas");

// Ambil data kriteria (perbaikan nama kolom)
$q_kriteria = mysqli_query($conn, "SELECT idkriteria, namakriteria FROM kriteria");
?>

<!DOCTYPE html>
<html lang="en">

 <?php
 include "komponen/header.php";
?>

 <style>

/* Container utama */
.form-wrapper {
    width: 480px;
    background: #ffffff;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    margin: 40px auto;
    transition: 0.3s;
}

/* Judul Form */
.form-wrapper h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
    font-weight: 700;
    letter-spacing: 1px;
}

/* Label */
.form-wrapper label {
    font-weight: 600;
    color: #444;
    display: block;
    margin-bottom: 8px;
    text-align: left;
    padding-left: 4px;
}

/* Select modern */
.form-wrapper select {
    width: 100%;
    padding: 12px;
    font-size: 15px;
    border-radius: 10px;
    border: 2px solid #f0c7ff;
    background: white;
    outline: none;
    margin-bottom: 18px;
    transition: .25s;
}

.form-wrapper select:focus {
    border-color: #d87ed6;
    box-shadow: 0 0 8px rgba(216, 126, 214, 0.4);
}

/* Input */
.form-wrapper input[type="text"] {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: 2px solid #f0c7ff;
    outline: none;
    font-size: 15px;
    transition: .25s;
    margin-bottom: 20px;
}

.form-wrapper input[type="text"]:focus {
    border-color: #d87ed6;
    box-shadow: 0 0 8px rgba(216, 126, 214, 0.4);
}

/* Tombol */
.form-wrapper button {
    width: 100%;
    padding: 13px;
    background: linear-gradient(90deg, #f6bc9b, #d87ed6);
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: bold;
    border-radius: 14px;
    cursor: pointer;
    transition: .3s;
}

.form-wrapper button:hover {
    opacity: 0.9;
    transform: translateY(-3px);
}

.form-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    margin-top: 40px;
}

.form-image {
    width: 380px;
    border-radius: 18px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

@media(max-width: 992px) {
    .form-container {
        flex-direction: column; /* HP jadi vertikal */
    }
    .form-image {
        width: 90%;
    }
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
            

<div class="table-container">

<div class="form-container">

    <!-- KIRI: GAMBAR GANTI-->
    <img src="assets/images/video-thumb.jpg" class="form-image" alt="Illustration"> 

    <!-- KANAN: FORM -->
    <div class="form-wrapper">
        <h2>Form Input Data Matriks</h2>

        <form action="aksidata.php" method="POST">

            <label>Pilih Identitas</label>
            <select name="ididentitas" required>
                <option value="">-- pilih siswa --</option>
                <?php while ($row = mysqli_fetch_assoc($q_identitas)) { ?>
                    <option value="<?= $row['ididentitas']; ?>">
                        <?= $row['nama']; ?>
                    </option>
                <?php } ?>
            </select>

            <label>Pilih Kriteria</label>
            <select name="idkriteria" required>
                <option value="">-- pilih kriteria --</option>
                <?php while ($row = mysqli_fetch_assoc($q_kriteria)) { ?>
                    <option value="<?= $row['idkriteria']; ?>">
                        <?= $row['namakriteria']; ?>
                    </option>
                <?php } ?>
            </select>

            <label>Value</label>
            <input type="text" name="value" placeholder="Masukkan value..." required>

            <button type="submit">Simpan</button>

        </form>
    </div>
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