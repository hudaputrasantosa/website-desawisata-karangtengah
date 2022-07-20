<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Desa Karangtengah</title>
   <link href="assets/img/favicon.png" rel="icon">

   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="../css/carousel.css" rel="stylesheet">
   <link href="../css/mdb.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

   <?php
   include '../component/header.php';
   ?>

   <main id="main">
      <div class="container">
         <div class="row">

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="overlay-image">
                        <img src="../assets/img/produkdesa/gulakelapa.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="container">

                        <div class="carousel-caption">
                           <h2>Produk Desa</h2>
                           <p>Kecamatan Cilongok, Kabupaten Banyumas, Provinsi Jawa Tengah, Indonesia</p>

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="assets/img/produkdesa/gulakelapa.jpg " class="d-block w-100" alt=" ">
                     <div class="container">
                        <div class="carousel-caption">
                           <h1>Banner Desa</h1>
                           <p>Some representative placeholder content for the second slide of the carousel.</p>

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="assets/img/banner/Banner3..jpg" class="d-block w-100" alt="">
                     <div class="container">
                        <div class="carousel-caption">
                           <h1>Banner Desa</h1>
                           <p>Some representative placeholder content for the second slide of the carousel.</p>

                        </div>
                     </div>
                  </div>
               </div>

            </div>

            <div class="album py-5">
               <div class="container">

                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                     <?php
                     include '../admin/config.php';
                     $getData = mysqli_query($konfigur, "SELECT * FROM produk");
                     while ($row = mysqli_fetch_array($getData)) {
                     ?>

                        <div class="col">
                           <div class="card shadow-sm">
                              <img src="../assets/img/produkdesa/<?= $row['foto_produk']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                              <title>Placeholder</title>
                              <rect width="100%" height="100%" fill="#55595c" />
                              </img>
                              <div class="card-body">
                                 <h5><?= $row['nama_produk']; ?></h5>
                                 <h4 style="font-weight: bold;"><?= $row['harga'] . '/' . $row['ukuran'] ?></h4>
                                 <p><?= $row['deskripsi']; ?></p>
                                 <div class="d-flex justify-content-between align-items-center">
                                    <a href="<?= $row['no_whatsapp']; ?>" type="button" class="btn-hijau">Beli Sekarang</a>
                                    <a href="<?= $row['no_whatsapp']; ?>" type="button" class="btn-hijau">Maps </a>

                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php
                     }
                     mysqli_close($konfigur);
                     ?>

                  </div>
               </div>
            </div>
         </div>

      </div>
      </div>
   </main>



   <?php
   include '../component/footer.php';
   ?>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script src="/website-desawisata-karangtengah/public/js/main.js"></script>
   <script type="text/javascript" src="/website-desawisata-karangtengah/public/js/mdb.min.js"></script>
   <script type="text/javascript" src="/website-desawisata-karangtengah/public/js/script.js"></script>
</body>

</html>