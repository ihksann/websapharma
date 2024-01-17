<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sapharma Corporation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/sapharma_icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include 'navbar.html';
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>SAP AT GLANCE</h2>
              <p>Didirikan pada tahun 2011, Satya Abadi Pharma (Sapharma) adalah perusahaan farmasi yang sedang
                berkembang dalam memasarkan produk farmasi dan alat kesehatan yang berkualitas. Hanya dalam 6 tahun,
                Sapharma telah menjadi salah satu perusahaan terkemuka dalam terapi protein plasma di Indonesia</p>
              <p>Sebagai upaya untuk memberikan pelayanan yang lebih luas kepada masyarakat, Sapharma juga menyediakan
                produk-produk suplemen dan obat tradisional.</p>
              <p>Investasi sumber daya manusia, tentunya memegang peranan penting dalam menentukan pencapaian target dan
                ide perusahaan kami.</p>
              <div class="text-center"><a href="" class="btn-get-started">More info</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Produk</h2>
              <p>Kami berkomitmen untuk mengembangkan dan memasarkan produk-produk berkualitas tinggi, sesuai kebutuhan
                pelayanan kesehatan dan trend penyakit di masyarakat.</p>
              <div class="text-center"><a href="" class="btn-get-started">More Info</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Mitra</h2>
              <p>Untuk mengembangkan usaha dan memperluasan cakupan produk. Selain mitra lokal, kami juga bekerjasama
                dengan mitra global</p>
              <div class="text-center"><a href="" class="btn-get-started">More Info</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->



  <!-- ======= Sertifikat Section ======= -->
  <section id="sertifikat" class="sertifikat section-bg">
    <div class="container">

      <style>
        .sertifikat-slider {
          position: relative;
          overflow: hidden;
        }

        .swiper-slide {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .sertifikat {
          text-align: center;
          max-width: 100%;
        }

        .sertifikat-img {
          max-width: 100%;
          height: auto;
        }

        .sertifikat-info {
          margin-top: 20px;
        }

        .swiper-pagination {
          position: absolute;
          bottom: 10px;
          left: 50%;
          transform: translateX(-50%);
          display: flex;
        }

        .swiper-pagination-bullet {
          width: 8px;
          height: 8px;
          background-color: #007377;
          margin: 0 5px;
          opacity: 0.7;
          cursor: pointer;
        }

        .swiper-pagination-bullet-active {
          opacity: 1;
        }
      </style>

      <!-- Section Title -->
      <div class="section-title" data-aos="fade-up">
        <h2>sertifikat</h2>
      </div>

      <!-- sertifikat Slider -->
      <div class="sertifikat-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <!-- sertifikat 1 -->
          <div class="swiper-slide">
            <div class="sertifikat" data-aos="fade-up">
              <div class="sertifikat-img">
                <img src="assets/img/sertifikat/serti1.png" class="img-fluid" alt="Sertifikat 1">
              </div>
              <div class="sertifikat-info">
                <h5>Sertifikat 1</h5>
                <span>Keterangan Untuk Sertifikat</span>
              </div>
            </div>
          </div>

          <!-- sertifikat 2 -->
          <div class="swiper-slide">
            <div class="sertifikat" data-aos="fade-up">
              <div class="sertifikat-img">
                <img src="assets/img/sertifikat/serti1.png" class="img-fluid" alt="Sertifikat 2">
              </div>
              <div class="sertifikat-info">
                <h5>Sertifikat 2</h5>
                <span>Keterangan Untuk Sertifikat</span>
              </div>
            </div>
          </div>

          <!-- sertifikat 3 -->
          <div class="swiper-slide">
            <div class="sertifikat" data-aos="fade-up">
              <div class="sertifikat-img">
                <img src="assets/img/sertifikat/serti1.png" class="img-fluid" alt="Sertifikat 3">
              </div>
              <div class="sertifikat-info">
                <h5>Sertifikat 3</h5>
                <span>Keterangan Untuk Sertifikat</span>
              </div>
            </div>
          </div>

          <!-- Manajemen 4 -->
          <div class="swiper-slide">
            <div class="sertifikat" data-aos="fade-up">
              <div class="sertifikat-img">
                <img src="assets/img/sertifikat/serti1.png" class="img-fluid" alt="Sertifikat 4">
              </div>
              <div class="sertifikat-info">
                <h5>Sertifikat 4</h5>
                <span>Keterangan Untuk Sertifikat</span>
              </div>
            </div>
          </div>

          <!-- sertifikat 5 -->
          <div class="swiper-slide">
            <div class="sertifikat" data-aos="fade-up">
              <div class="sertifikat-img">
                <img src="assets/img/sertifikat/serti1.png" class="img-fluid" alt="Sertifikat 5">
              </div>
              <div class="sertifikat-info">
                <h5>Sertifikat 5</h5>
                <span>Keterangan Untuk Sertifikat</span>
              </div>
            </div>
          </div>

          <!-- sertifikat 6 -->
          <div class="swiper-slide">
            <div class="sertifikat" data-aos="fade-up">
              <div class="sertifikat-img">
                <img src="assets/img/sertifikat/serti1.png" class="img-fluid" alt="Sertifikat 6">
              </div>
              <div class="sertifikat-info">
                <h5>Sertifikat 6</h5>
                <span>Keterangan Untuk Sertifikat</span>
              </div>
            </div>
          </div>


        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination-sertifikat"></div>
        <!-- Add Navigation -->

      </div>

    </div>
  </section><!-- End sertifikat Section -->

  <!-- Include Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper('.sertifikat-slider', {
      slidesPerView: 1,
      spaceBetween: 500,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
      },
    });
  </script>
  </main><!-- End #main -->


  <!-- ======= Video Section ======= -->
  <style>
    /* Mengatur ukuran maksimum dan sentrasi video */
    #video-container {
      max-width: 100vw;
      max-height: 40vw;
      margin: auto;
      position: relative;
      overflow: hidden;
      height: 10%;
      /* Tinggi video diset ke 15cm */

    }

    #video-container video {
      width: 100%;
      /* Lebar video mengambil 100% lebar container */
      height: 50%;
      /* Tinggi video mengambil 100% tinggi container */
    }

    /* Menyembunyikan durasi dan ikon pause */
    #local-video::-webkit-media-controls {
      display: none !important;
    }

    #local-video::-webkit-media-controls-enclosure {
      display: none !important;
    }

    #local-video::-webkit-media-controls-play-button {
      display: none !important;
    }

    #local-video::-webkit-media-controls-current-time-display {
      display: none !important;
    }

    #local-video::-webkit-media-controls-time-remaining-display {
      display: none !important;
    }

    #local-video::-webkit-media-controls-timeline {
      display: none !important;
    }

    #local-video::-webkit-media-controls-volume-slider {
      display: none !important;
    }
  </style>

  <section id="video-section">
    <div id="video-container">
      <!-- Ganti bagian berikut dengan kode video dari direktori lokal -->
      <video id="local-video" autoplay loop controls muted>
        <source src="assets/video/vidpabrik_4.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </section>
  </main><!-- End #main -->

  <!-- ======= Clients Section ======= -->
  <section id="produk" class="produk section-bg">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>MITRA KAMI</h2>
      </div>
      <style>
        .clients {
          padding: 0 0 60px 0;
        }
        .clients .swiper-slide {
          margin: 30px 30px; /* Adjust the margin values as needed */
        }

        .clients .swiper-slide img {
          width: 180%;
          /* Set the width to 100% to make the image responsive */
          max-width: 200%;
          /* Ensure the image doesn't exceed its natural size */
          height: auto;
          /* Allow the height to adjust proportionally */
          opacity: 0.5;
          transition: 0.3s;
          filter: grayscale(100);
        }

        .clients .swiper-slide img:hover {
          filter: none;
          opacity: 1;
        }
      </styLe>
      <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="assets/img/clients/mitraglobal/biohit.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/mitraglobal/medicsblue.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/mitraglobal/neopharma.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/mitraglobal/octapharma.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/mitraglobal/sancchemia.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/mitraglobal/werfen.png" class="img-fluid" alt=""></div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>
  <!-- End Clients Section -->

  <script>
    /**
     * Clients Slider
     */
    document.addEventListener('DOMContentLoaded', function() {
      var swiper = new Swiper('.clients-slider', {
        speed: 400,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          480: {
            slidesPerView: 3,
            spaceBetween: 60
          },
          640: {
            slidesPerView: 4,
            spaceBetween: 80
          },
          992: {
            slidesPerView: 6,
            spaceBetween: 120
          }
        }
      });
    });
  </script>

  <!-- ======= Produk Section ======= -->

  <style>
    .produk-slider {
      position: relative;
      overflow: hidden;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .produk {
      text-align: center;
      max-width: 100%;
    }

    .produk-img {
      max-width: 100%;
      height: auto;
    }

    .produk-info {
      margin-top: 20px;
    }

    .swiper-pagination {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
    }

    .swiper-pagination-bullet {
      width: 8px;
      height: 8px;
      background-color: #007377;
      margin: 0 5px;
      opacity: 0.7;
      cursor: pointer;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
    }


    /* Tambahkan gaya untuk efek hover */
    .produk .produk-img:hover img {
      filter: none;
      opacity: 1;
    }

    /* Gaya tambahan untuk efek hover */
    .produk .produk-img img {
      transition: filter 0.3s, opacity 0.3s;
    }

    /* Sesuaikan jika diperlukan */
    .produk .produk-img img:hover {
      filter: brightness(110%);
      /* Ganti efek hover sesuai keinginan Anda */
    }


    @media (max-width: 640px) {
      .clients .client-logo img {
        padding: 20px;
      }
    }
  </style>
  <section id="produk" class="produk section-bg">
    <div class="container">

      <!-- Section Title -->
      <div class="section-title" data-aos="fade-up">
        <h2>PRODUK KAMI</h2>
      </div>

      <!-- produk Slider -->
      <div class="produk-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <!-- produk 1 -->
          <div class="swiper-slide">
            <div class="produk" data-aos="fade-up">
              <div class="produk-img">
                <img src="assets/img/ethical/albuforce/ALBUFORCE_CAPSULE.png" class="img-fluid" alt="Puji Nurhendaryati">
              </div>
              <div class="produk-info">
                <p>ALBUFORCE KAPSUL 500 MG</p>
                <p><a href="01. Ethical - Albuforce capsule.html" class="btn btn-detail" data-detail="produk1">Detail</a></p>
              </div>
            </div>
          </div>

          <!-- produk 2 -->
          <div class="swiper-slide">
            <div class="produk" data-aos="fade-up">
              <div class="produk-img">
                <img src="assets/img/ethical/albuforce plus/ALBUFORCE_PLUS.png" class="img-fluid" alt="Puji Nurhendaryati">
              </div>
              <div class="produk-info">
                <p>ALBUFORCE PLUS</p>
                <p><a href="01. Ethical - Albuforce capsule.html" class="btn btn-detail" data-detail="produk1">Detail</a></p>
              </div>
            </div>
          </div>

          <!-- produk 3 -->
          <div class="swiper-slide">
            <div class="produk" data-aos="fade-up">
              <div class="produk-img">
                <img src="assets/img/ethical/albuforce-s/ALBUFORCE_S.png" class="img-fluid" alt="Puji Nurhendaryati">
              </div>
              <div class="produk-info">
                <p>ALBUFORCE-S</p>
                <p><a href="01. Ethical - Albuforce capsule.html" class="btn btn-detail" data-detail="produk1">Detail</a></p>
              </div>
            </div>
          </div>

          <!-- produk 4 -->
          <div class="swiper-slide">
            <div class="produk" data-aos="fade-up">
              <div class="produk-img">
                <img src="assets/img/ethical/albunorm-50/ALBUNORM_20_50ML.png" class="img-fluid" alt="Puji Nurhendaryati">
              </div>
              <div class="produk-info">
                <p>ALBUNORM 20% 50ml</p>
                <p><a href="01. Ethical - Albuforce capsule.html" class="btn btn-detail" data-detail="produk1">Detail</a></p>
              </div>
            </div>
          </div>

          <!-- produk 5 -->
          <div class="swiper-slide">
            <div class="produk" data-aos="fade-up">
              <div class="produk-img">
                <img src="assets/img/ethical/albunorm-25/ALBUNORM_25_100ML.png" class="img-fluid" alt="Puji Nurhendaryati">
              </div>
              <div class="produk-info">
                <p>Albunorm 25% 100 ml</p>
                <p><a href="01. Ethical - Albuforce capsule.html" class="btn btn-detail" data-detail="produk1">Detail</a></p>
              </div>
            </div>
          </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination-produk"></div>
      </div>

    </div>
  </section><!-- End produk Section -->

  <!-- Include Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    // Initialize Swiper when the document is ready
    document.addEventListener('DOMContentLoaded', function() {
      var swiper = new Swiper('.produk-slider', {
        slidesPerView: 3, // Display 3 slides at a time
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    });
  </script>



  <!-- Stats Section - Home Page -->
  <section id="stats" class="stats">

    <!-- Section Title -->
    <div class="section-title" data-aos="fade-up">
      <h2>TENTANG SAPHARMA</h2>
    </div>


    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Mitra Kami</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Mitra Lokal</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Distributor</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Karyawan</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Produk</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Perusahaan</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Sertifikat</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="999" data-purecounter-duration="1" class="purecounter"></span>
            <p>Perizinan</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- End Stats Section -->


  <!-- LATEST NEWS -->

  <style>
    /* Recent-posts Section - Home Page*/
    .recent-posts article {
      box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
      padding: 30px;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
    }

    .recent-posts .post-img {
      max-height: 240px;
      margin: -30px -30px 15px -30px;
      overflow: hidden;
    }

    .recent-posts .post-category {
      font-size: 16px;
      color: rgba(var(--default-color-rgb), 0.5);
      margin-bottom: 10px;
    }

    .recent-posts .title {
      font-size: 20px;
      font-weight: 600;
      padding: 0;
      margin: 0 0 20px 0;
    }

    .recent-posts .title a {
      color: var(--secondary-color);
      transition: 0.3s;
    }

    .recent-posts .title a:hover {
      color: var(--primary-color);
    }

    .recent-posts .post-author-img {
      width: 50px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .recent-posts .post-author {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .recent-posts .post-date {
      font-size: 14px;
      color: rgba(var(--default-color-rgb), 0.5);
      margin-bottom: 0;
    }
  </style>

  <!-- Stats Section - Home Page -->
  <section id="recent-posts" class="recent-posts">

    <!-- Section Title -->
    <div class="section-title" data-aos="fade-up">
      <h2>LATEST NEWS</h2>
    </div>

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category"><i class="bi bi-calendar4"> </i>17 Januari 2024</p>

            <h4 class="title">
              <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
            </h4>
            <div class="d-flex align-items-center">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quas architecto delectus minus blanditiis dolorum eius, et omnis suscipit! Aspernatur, dignissimos molestias? Incidunt corrupti laborum sit. Ratione minima expedita sint.</p>
            </div>
          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category"><i class="bi bi-calendar4"> </i>17 Januari 2024</p>

            <h4 class="title">
              <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h4>
            <div class="d-flex align-items-center">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quas architecto delectus minus blanditiis dolorum eius, et omnis suscipit! Aspernatur, dignissimos molestias? Incidunt corrupti laborum sit. Ratione minima expedita sint.</p>
            </div>
          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category"><i class="bi bi-calendar4"> </i>17 Januari 2024</p>

            <h4 class="title">
              <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
            </h4>

            <div class="d-flex align-items-center">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quas architecto delectus minus blanditiis dolorum eius, et omnis suscipit! Aspernatur, dignissimos molestias? Incidunt corrupti laborum sit. Ratione minima expedita sint.</p>
            </div>
          </article>
        </div><!-- End post list item -->
      </div><!-- End recent posts list -->
    </div>
  </section>




  <!-- Include Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <style>
    .btn-detail {
      background-color: #007377;
      /* Warna hijau */
      color: #fff;
      /* Warna teks putih */
      padding: 10px 20px;
      /* Padding tombol */
      border: none;
      /* Menghilangkan border */
      text-decoration: none;
      /* Menghilangkan dekorasi teks */
      display: inline-block;
      transition: background-color 0.3s;
      /* Efek transisi saat hover */
    }

    .btn-detail:hover {
      background-color: #00514c;
      /* Warna hijau lebih gelap saat hover */
    }
  </style>

  <!-- ======= Product Catalog Section ======= -->
  <section id="product-catalog" class="product-catalog">
    <div class="container">
      <div class="row">

        <!-- Section Title -->
        <div class="section-title" data-aos="fade-up">
          <h2>PERUSAHAAN KAMI</h2>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="product-frame">
            <img src="assets/img/galeri/01.png" alt="Product 1">
            <p class="product-caption" style="color: black; font-weight: bold; text-decoration: none; text-align: center;">HUT RI KE-78</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="product-frame">
            <img src="assets/img/galeri/02.png" alt="Product 2">
            <p class="product-caption" style="color: black; font-weight: bold; text-decoration: none; text-align: center;">HUT RI KE-78</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="product-frame">
            <img src="assets/img/galeri/03.png" alt="Product 3">
            <p class="product-caption" style="color: black; font-weight: bold; text-decoration: none; text-align: center;">HUT RI KE-78</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="product-frame">
            <img src="assets/img/galeri/04.png" alt="Product 1">
            <p class="product-caption" style="color: black; font-weight: bold; text-decoration: none; text-align: center;">HUT RI KE-78</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Product Catalog Section -->

  <!-- ======= Footer ======= -->
  <?php
  include 'footer.html';
  ?><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>