<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template">
    <meta name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Profil Desa</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <?php
        include './navigationCollapse.php';
        ?>
        <!-- Page Content -->

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">


                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php

                include './config.php';

                $getData = mysqli_query($konfigur, "SELECT * FROM visi_misi");
                while ($row = mysqli_fetch_array($getData)) {
                ?>
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <h3>Visi dan Misi</h3>
                                <div class="white-box">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Visi</th>
                                                    <th>Misi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?= $row['visi_deskripsi']; ?></td>
                                                    <td><?= $row['misi_deskripsi']; ?></td>
                                                    <td>

                                                        <a href="update-visi-misi.php">
                                                            <button class="btn btn-primary">Ubah</button>
                                                        </a>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    <?php
                }
                mysqli_close($konfigur);

                    ?>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <h3>Sejarah Desa</h3>

                                <div class="white-box">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include './config.php';

                                                $getData = mysqli_query($konfigur, "SELECT * FROM sejarah");
                                                while ($row = mysqli_fetch_array($getData)) {
                                                ?>
                                                    <tr>
                                                        <td><?= $row['deskripsi']; ?></td>
                                                        <td><img src="../assets/img/sejarah/<?= $row['foto']; ?>" width="100"></td>
                                                        <td>
                                                            <a href="./update-sejarah">
                                                                <button class="btn btn-primary">Ubah</button>
                                                            </a>
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
    </div>
    <!-- /#page-wrapper -->

    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="js/jquery.nicescroll.js"></script>
    <!--Morris JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
    <script src="js/dashboard1.js"></script>
</body>

</html>