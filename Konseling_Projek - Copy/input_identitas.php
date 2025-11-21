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

/* Container utama */
.form-wrapper {
    width: 450px;
    background: #ffffff;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.12);
    margin: 40px auto;
    transition: 0.3s;
}

/* Judul Form */
.form-wrapper h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #444;
    font-weight: 600;
}

/* Label */
.form-wrapper label {
    font-weight: 600;
    color: #555;
    display: block;
    margin-bottom: 6px;
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
    margin-bottom: 15px;
}

.form-wrapper input[type="text"]:focus {
    border-color: #d87ed6;
    box-shadow: 0 0 8px rgba(216, 126, 214, 0.4);
}

/* Tombol */
.form-wrapper button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #f6bc9b, #d87ed6);
    border: none;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border-radius: 12px;
    cursor: pointer;
    transition: .3s;
}

.form-wrapper button:hover {
    opacity: 0.9;
    transform: translateY(-2px);
}

/* Wrapper dua kolom */
.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    margin-top: 40px;
}

/* Kolom kiri gambar */
.form-image {
    max-width: 350px;
}

.form-image img {
    width: 100%;
    border-radius: 15px;
}

/* Kolom kanan form */
.form-wrapper {
    width: 450px;
    background: #ffffff;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.12);
}

/* Label form rata kiri */
.form-wrapper label {
    text-align: left;
    display: block;
    font-weight: 600;
    color: #555;
    margin-bottom: 6px;
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
          
<div class="form-container">

    <!-- KIRI: GAMBAR -->
    <div class="form-image">
        <img src="assets/images/video-thumb.jpg" alt="gambar">
    </div>

    <!-- KANAN: FORM -->
    <div class="form-wrapper">
        <h2>Form Input Identitas</h2>

        <form action="aksiidentitas.php" method="POST">
            <label>NIS</label>
            <input type="text" name="nis" required>

            <label>Nama</label>
            <input type="text" name="nama" required>

            <label>Kelas</label>
            <input type="text" name="kelas" required>

            <button type="submit">Simpan</button>
        </form>
    </div>

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
            <p>Trust fund nocore broklyn humblebrag mustache
              pork kitsch, bicycle rights hexagon schlitz keytar palo is
              santo drinking vinegar fam ramps. </p>
            <div class="main-button-gradient">
              <a href="https://smansatuban.sch.id/news/">SMA Negeri 1 Tuban</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="video">
            <div class="thumb">
              <img src="assets/images/video-thumb.jpg" alt="">
              <div class="play-button">
                <a rel="nofollow" href="https://www.youtube.com/templatemo" target="_blank"><i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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