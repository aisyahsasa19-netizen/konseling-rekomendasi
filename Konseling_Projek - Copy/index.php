<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<div class="right-image">
    <img src="assets/images/anaksma.png" class="gambar-anak" alt="">
</div>

</div>

    <title>Sistem Rekomendasi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>
<style>
.right-image img {
    width: 50%;      /* kecilin sesuai kebutuhan */
    height: -200px;
    float: right;     /* bikin gambar nempel ke kiri */
    margin-right: 20px;   /* jarak kalau nanti mau nambah elemen lain */
    margin-top: 100px

}
</style>  
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

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Sistem Rekomendasi</h6>
            <h2>Siswa Bimbingan <br><em>Konseling</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Data</h6>
            <h4>Kriteria <em> Bimbingan </em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Nilai Rapor</h4>
                <p>Semakin tinggi nilai rapor, semakin baik hasil penilaian siswa.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>KEHADIRAN</h4>
                <p>Semakin baik tingkat kehadiran, semakin positif penilaian terhadap siswa.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>KEDISILINAN</h4>
                <p>Semakin tinggi tingkat kedisiplinan, 
                  semakin kecil risiko munculnya masalah perilaku dan 
                  semakin rendah kebutuhan pendampingan dari guru BK.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>KESEJAHTERAAN</h4>
                <p>Semakin rendah tingkat kesejahteraan siswa, 
                  semakin tinggi prioritas untuk diberikan 
                  perhatian dan bantuan tambahan.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>KONDISI SOSIAL EKONOMI</h4>
                <p>Semakin besar kesulitan ekonomi, semakin tinggi prioritas untuk dibantu.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>KONDISI KESEHATAN</h4>
                <p>Semakin buruk kondisi kesehatan, semakin tinggi tingkat kebutuhan pendampingan.</p>
              </div>
            </div>
        
          </div>
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