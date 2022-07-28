<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Detail Berita</title>


   <!-- Favicons -->
   <link href="../assets/img/favicon.ico" rel="icon">


   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->

   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


   <!-- Template Main CSS File -->
   <link href="../css/style.css" rel="stylesheet">

</head>

<body>

   <!-- ======= Header ======= -->
   <?php
   session_start();
   include '../component/header.php';
   ?>

   <main id="main">

      <!-- ======= Blog Single Section ======= -->
      <section class="blog">
         <div class="container my-5">
            <?php

            include '../admin/config.php';
            $id = $_GET['id_berita'];

            $getBerita = mysqli_query($konfigur, "SELECT * FROM berita WHERE id_berita='$id'");
            while ($row = mysqli_fetch_array($getBerita)) {
            ?>
               <div class="row">
                  <div class="col-lg-9 entries">
                     <article class="entry entry-single">
                        <div class="entry-img">
                           <img src="../assets/img/beritaterkini/<?= $row['foto_berita']; ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                           <?= $row['judul_berita']; ?>
                        </h2>

                        <div class="entry-meta">
                           <ul>
                              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                              <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?= $row['tanggal_waktu']; ?></li>

                           </ul>
                        </div>
                        <div class="entry-content">
                           <p><?= $row['deskripsi']; ?></p>
                        </div>


                     </article><!-- End blog entry -->




                  </div><!-- End blog entries list -->



               </div>
            <?php }
            mysqli_close($konfigur); ?>

         </div>
      </section><!-- End Blog Single Section -->

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <?php
   include '../component/footer.php';
   ?>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>

</body>

</html>