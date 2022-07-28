<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
   <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
   <meta name="robots" content="noindex,nofollow">
   <title>Footer</title>
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
                     <h3>Footer</h3>

                     <div class="white-box">
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Deskripsi</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Maps</th>
                                    <th>Instagram</th>
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Aksi</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 include '../admin/config.php';

                                 $getData = mysqli_query($konfigur, "SELECT * FROM footer");
                                 while ($row = mysqli_fetch_array($getData)) {
                                 ?>
                                    <tr>
                                       <td><?= $row['deskripsi'] ?></td>
                                       <td><?= $row['alamat'] ?></td>
                                       <td><?= $row['email'] ?></td>
                                       <td><?= $row['telepon'] ?></td>
                                       <td><a href="<?= $row['maps']; ?>">Link</a></td>
                                       <td><?= $row['instagram'] ?></td>
                                       <td><?= $row['facebook'] ?></td>
                                       <td><?= $row['twitter'] ?></td>

                                       <td>
                                          <a href="./update-footer" class="btn btn-primary">Ubah</a>
                                       </td>

                                    </tr>
                                 <?php } ?>
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