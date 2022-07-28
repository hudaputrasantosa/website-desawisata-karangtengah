<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
   <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
   <meta name="robots" content="noindex,nofollow">
   <title>Update Produk Desa</title>
   <link rel="canonical" href="https://www.wrappixel.com/templates/myadmin-lite/" />
   <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
   <!-- Bootstrap Core CSS -->
   <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Menu CSS -->
   <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link href="css/style.css" rel="stylesheet">
   <script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
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
                     <h3>Update Produk</h3>
                     <?php
                     include './config.php';
                     $id = $_GET['id_produk'];
                     $getData = mysqli_query($konfigur, "SELECT * FROM produk WHERE id_produk = '$id'");
                     while ($row = mysqli_fetch_array($getData)) { ?>
                        <form class="form-horizontal form-material" action="update-produk-aksi" enctype="multipart/form-data" method="post">
                           <input type="hidden" name="id" value="<?= $row['id_produk']; ?>">
                           <input type="hidden" name="_tempimg" value="<?= $row['foto_produk']; ?>">
                           <div class="form-group">
                              <div class="col-md-12">

                                 <input type="text" name="nama" class="form form-control" placeholder="Nama Produk" value="<?= $row['nama_produk']; ?>">
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="col-md-12">
                                 <input type="text" name="harga" class="form form-control" placeholder="Harga Produk" value="<?= $row['harga']; ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-12">
                                 <input type="text" name="ukuran" class="form form-control" placeholder="Ukuran Produk" value="<?= $row['ukuran']; ?>">
                              </div>
                           </div>


                           <div class="form-group">
                              <div class="col-md-12">
                                 <label for="deskripsi">Deskripsi</label>
                                 <textarea name="deskripsi" id="editor1" type="text" placeholder="Ketikan Isi berita.." class="form-control form-control-line">
                                 <?= $row['deskripsi']; ?>
                                </textarea>
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="col-md-12">
                                 <input type="text" name="alamat" class="form form-control" placeholder="Alamat" value="<?= $row['alamat']; ?>">
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="col-md-12">
                                 <input type="text" name="whatsapp" class="form form-control" placeholder="No Whatsapp" value="<?= $row['no_whatsapp']; ?>">
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-12">
                                 <label for="image">Foto Produk</label>
                                 <input type="file" name="image" class="btn btn-primary btn-rounded"><?= $row['foto_produk']; ?>
                              </div>

                           </div>

                           <div class="form-group">
                              <div class="col-sm-12">
                                 <input name="submit" type="submit" class="btn btn-primary" value="Update Produk">
                              </div>
                           </div>
                        </form>
                     <?php } ?>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /#page-wrapper -->
         <footer class=" text-center"> 2022 &copy; Desa Wisata Karangtengah</a> </footer>
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
      <script>
         CKEDITOR.replace('editor1');
         CKEDITOR.replace('editor2');
      </script>
</body>

</html>