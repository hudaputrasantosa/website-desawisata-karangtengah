<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
   <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
   <meta name="robots" content="noindex,nofollow">
   <title>Berita Desa</title>
   <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
   <!-- Bootstrap Core CSS -->
   <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Menu CSS -->
   <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <!-- Preloader -->

   <div id="wrapper">
      <!-- Navigation -->
      <?php include './navigationCollapse.php'; ?>
      <!-- Page Content -->
      <div id="page-wrapper">
         <div class="container-fluid">
            <div class="row bg-title">
               <div class="col-lg-12">


               </div>
               <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="white-box">
                     <h3>Produk Desa</h3>

                     <div class="white-box">
                        <a href="./tambah-produk" class="btn btn-success">Tambah Produk</a><br><br>
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Ukuran</th>
                                    <th>Deskripsi</th>
                                    <th>Alamat</th>
                                    <th>Whatsapp</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 include './config.php';
                                 $getData = mysqli_query($konfigur, "SELECT * FROM produk");
                                 while ($row = mysqli_fetch_array($getData)) { ?>
                                    <tr>
                                       <td>1</td>
                                       <td><?= $row['nama_produk']; ?></td>
                                       <td><?= $row['harga']; ?></td>
                                       <td><?= $row['ukuran']; ?></td>
                                       <td><?= $row['deskripsi']; ?></td>
                                       <td><?= $row['alamat']; ?></td>
                                       <td><?= $row['no_whatsapp']; ?></td>
                                       <td><img src="../assets/img/produkdesa/<?= $row['foto_produk']; ?>" width="100"></td>
                                       <td>
                                          <a href="./update-produk?id_produk=<?= $row['id_produk']; ?>" class="btn btn-primary">Ubah</a>
                                          <a href="./hapus-produk?id_produk=<?= $row['id_produk']; ?>" class="btn btn-danger">Hapus</a>
                                       </td>

                                    </tr>
                                 <?php }
                                 mysqli_close($konfigur) ?>
                              </tbody>
                           </table>
                        </div>

                     </div>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /#page-wrapper -->
         <footer class="text-center"> 2022 &copy; Desa Wisata Karangtengah</a> </footer>
      </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
      <!--Nice scroll JavaScript -->
      <script src="js/jquery.nicescroll.js"></script>
      <!--Wave Effects -->
      <script src="js/waves.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="js/myadmin.js"></script>
</body>

</html>