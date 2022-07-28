<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Visi Misi</title>
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

   $getData = mysqli_query($konfigur, "SELECT * FROM visi_misi");
   while ($row = mysqli_fetch_array($getData)) {
   ?>
      <div class="container px-4 py-5">
         <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="text-center">
               <h1 class="display-6 fw-bold mt-5 lh-1 mb-3">VISI DAN MISI Desa Karangtengah</h1>
               <div class="d-grid gap-2 d-md-flex justify-content-md-start">
               </div>
            </div>
            <div class="text-center">
               <h3 class="display-8 fw-bold mt-5 lh-1 mb-3">Visi</h3>
               <p class="lead"><?= $row['visi_deskripsi']; ?></p>
               <div class="d-grid gap-2 d-md-flex justify-content-md-start">
               </div>
            </div>
            <div class="text-center">
               <h3 class="display-8 fw-bold mt-5 lh-1 mb-3">Misi</h3>
               <p class="lead"><?= $row['misi_deskripsi']; ?></p>
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