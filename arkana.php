<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog Single - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .sidebar {
      color: #fff;

    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar ul li {
      margin-bottom: 10px;
      font-weight: bold;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: black;
      display: block;
      padding: 5px;
      font-size: 1.2rem;
      /* Menggunakan rem untuk ukuran font */
    }

    .pagecontainer {
      display: grid;
      grid-template-columns: 30% 80%;
      height: 100vh;
      padding: 50px;
    }

    .content {
      padding: 5px;
      max-width: 100vh;
    }

    #banner {
      display: flex;
      grid-template-columns: 100% 100%;
      width: 100vw;
      height: 50vh;
      margin-bottom: 40px;
    }

    #banner img {
      object-fit: cover;
      max-width: 100%;
      height: auto;
      align-items: center;
      justify-content: center;
    }


    @media only screen and (max-width: 768px) {
      .sidebar {
        display: none;
        /* Menyembunyikan sidebar */
      }

      .coloumn {
        width: 100%;
        /* Menggunakan lebar penuh ketika sidebar disembunyikan */
      }

      .content {
        margin: 0 auto;
        /* Memberikan margin otomatis agar konten berada di tengah */
      }

    }
  </style>

  <div>
    <div id="banner">
      <img src="assets/img/perusahaan/asa.JPG" alt="">
    </div>

    <div class="container">
      <div class="row">
        <div class="pagecontainer">
          <div class="coloumn">
            <div class="sidebar">
              <!-- Sidebar Menu Navigation -->
              <ul>
                <li><a href="#gambaranumum">GAMBARAN UMUM</a></li>
                <li><a href="#">NILAI DASAR</a></li>
                <li><a href="#">KOMPETENSI INTI</a></li>
                <!-- Add more menu items as needed -->
              </ul>
            </div>
          </div>

          <div class="coloumn">
            <div id="gambaranumum" class="content">
              <!-- Content Goes Here -->
              <h2>GAMBARAN UMUM</h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid sit sequi dolores rerum error tempore non, maiores praesentium consectetur incidunt pariatur quos expedita quis quibusdam officiis facere corporis quaerat dolorum. loren</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid sit sequi dolores rerum error tempore non, maiores praesentium consectetur incidunt pariatur quos expedita quis quibusdam officiis facere corporis quaerat dolorum. loren</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid sit sequi dolores rerum error tempore non, maiores praesentium consectetur incidunt pariatur quos expedita quis quibusdam officiis facere corporis quaerat dolorum. loren</p>
            
            </div>

            <div id="nilaidasar" class="content">
              <!-- Content Goes Here -->
              <h2>GAMBARAN UMUM</h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid sit sequi dolores rerum error tempore non, maiores praesentium consectetur incidunt pariatur quos expedita quis quibusdam officiis facere corporis quaerat dolorum. loren</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- ======= Footer ======= -->
  <?php
  include 'footer.html';
  ?>
  <!-- End Footer -->


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