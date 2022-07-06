<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Desa Karangtengah</title>
   <link href="../assets/img/favicon.png" rel="icon">

   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="../css/carousel.css" rel="stylesheet">
   <link href="../css/mdb.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">

</head>

<body>
   <?php
   include '../component/header.php';
   ?>

   <main id="main">
      <div class="container">
         <div class="row">

            <main class="my-5">
               <div class="container">
                  <!--Grid row-->
                  <div class="row">
                     <!--Grid column-->
                     <div class="col-md-10 mb-4">
                        <!--Section: Content-->


                        <section>
                           <h2 style="font-weight: bold;">Berita Desa</h2><br>
                           <!-- Post -->
                           <?php

                           include '../admin/config.php';

                           $getBerita = mysqli_query($konfigur, "SELECT * FROM berita");
                           while ($row = mysqli_fetch_array($getBerita)) {
                           ?>
                              <div class="row">
                                 <div class="col-md-5 mb-5">
                                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                                       <img src="../assets/img/beritaterkini/berita1.jpg" class="img-fluid" />
                                       <a href="#!">
                                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-md-7 mb-4">
                                    <h5 style="font-weight: bold;"><?= $row['judul_berita']; ?></h5>
                                    <p>
                                       <?= $row['deskripsi']; ?>
                                    </p>

                                    <button type="button" class="btn-hijau">Lihat Selengkapnya</button>
                                 </div>
                              </div>

                           <?php }
                           mysqli_close($konfigur);
                           ?>
                        </section>






                     </div>

                     <!--Grid row-->
                     <!-- Pagination -->
                     <nav class="my-4" aria-label="...">
                        <ul class="pagination pagination-circle justify-content-center">
                           <li class="page-item">
                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">1</a></li>
                           <li class="page-item active" aria-current="page">
                              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>


            </main>
            <!--Main layout-->

         </div>
      </div>
   </main>

   <?php
   include '../component/footer.php';
   ?>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script src="js/main.js"></script>
   <script type="text/javascript" src="js/mdb.min.js"></script>
   <script type="text/javascript" src="js/script.js"></script>
</body>

</html>