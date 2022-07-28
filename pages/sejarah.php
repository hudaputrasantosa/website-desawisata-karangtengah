<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Sejarah</title>
   <link href="../assets/img/favicon.ico" rel="icon">
   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="../css/carousel.css" rel="stylesheet">
   <link href="../css/mdb.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">
</head>

<body>


   <?php
   include '../component/header.php';
   include '../admin/config.php';

   $getData = mysqli_query($konfigur, "SELECT * FROM sejarah");
   while ($row = mysqli_fetch_array($getData)) {
   ?>
      <div class="container col-xxl-8 px-4 py-5">
         <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
               <img src="../assets/img/sejarah/<?= $row['foto']; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
               <h1 class="display-5 fw-bold mt-5 lh-1 mb-4">Sejarah Desa Karangtengah</h1>
               <p class="lead"><?= $row['deskripsi']; ?></p>
               <div class="d-grid gap-2 d-md-flex justify-content-md-start">

               </div>
            </div>
         </div>
      </div>

   <?php
   }
   mysqli_close($konfigur);
   include '../component/footer.php';
   ?>


   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>