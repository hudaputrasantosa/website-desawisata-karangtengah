<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Berita Desa</title>
   <link href="../assets/img/favicon.ico" rel="icon">

   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="../css/carousel.css" rel="stylesheet">
   <link href="../css/mdb.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">

</head>

<body>
   <?php
   session_start();
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

                           $batas = 6;
                           $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                           $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                           $previous = $halaman - 1;
                           $next = $halaman + 1;

                           $data = mysqli_query($konfigur, "SELECT * FROM berita");
                           $jumlah_data = mysqli_num_rows($data);
                           $total_halaman = ceil($jumlah_data / $batas);

                           $getBerita = mysqli_query($konfigur, "SELECT * FROM berita limit $halaman_awal, $batas");
                           while ($row = mysqli_fetch_array($getBerita)) {
                           ?>
                              <div class="row">
                                 <div class="col-md-5 mb-5">
                                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                                       <img src="../assets/img/beritaterkini/<?= $row['foto_berita']; ?>" class="img-fluid" />
                                       <a href="#!">
                                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-md-7 mb-4">
                                    <h5 style="font-weight: bold;"><?= $row['judul_berita']; ?></h5>
                                    <p>
                                       <?php echo (str_word_count($row['deskripsi']) > 50 ? substr($row['deskripsi'], 0, 255) . ' ...' : $row['deskripsi'])  ?>

                                    </p>

                                    <a href="./detail-berita?id_berita=<?= $row['id_berita']; ?>">Lihat Selengkapnya</a>
                                 </div>
                              </div>

                           <?php }
                           mysqli_close($konfigur);
                           ?>
                        </section>


                        <div class="mx-auto">
                           <nav>
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" <?php if ($halaman > 1) {
                                                            echo "href='?halaman=$previous'";
                                                         } ?>tabindex="-1">Sebelumnya</a>
                                 </li>
                                 <?php
                                 for ($x = 1; $x <= $total_halaman; $x++) {

                                 ?>
                                    <li class="page-item <?php ($next || $previous == $x) ? "active" : "" ?>"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                 <?php } ?>
                                 <li class="page-item">
                                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                            echo "href='?halaman=$next'";
                                                         } ?>>Selanjutnya</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>

                     </div>

                     <!--Grid row-->
                     <!-- Pagination -->

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

</body>

</html>