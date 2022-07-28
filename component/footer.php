  <!-- ======= Bagian Footer ======= -->
  <?php
   include '../admin/config.php';
   $getData = mysqli_query($konfigur, "SELECT * FROM footer");
   while ($row = mysqli_fetch_array($getData)) { ?>
     <footer class="footer">
        <div class="footer-top">
           <div class="container">
              <div class="row gy-4">
                 <div class="col-lg-3 col-md-12 footer-info">
                    <div class="logo d-flex align-items-center">
                       <img src="../assets/img/desa-karangtengah-3.png" alt="">
                    </div>
                    <p><?= $row['deskripsi']; ?>
                    </p>
                 </div>

                 <div class="col-lg-4 col-md-12 footer-links">
                    <h4>Kontak Kami</h4>
                    <p>
                       <?= $row['alamat']; ?>
                       <strong>Phone </strong>: <a href="https://api.whatsapp.com/send/?phone=<?= $row['telepon']; ?>" target="_blank"><?= $row['telepon']; ?></a> <br>
                       <strong>Email </strong>: karangtengahdesawisata@gmail.com<br>
                    </p>
                    <div class="social-links mt-3">
                       <a href="https://twitter.com/<?= $row['twitter']; ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                       <a href="https://facebook.com/<?= $row['facebook']; ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                       <a href="https://instagram.com/<?= $row['instagram']; ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                 </div>

                 <div class="col-lg-5 col-md-12 footer-links">
                    <h4>Lokasi Google Maps Desa</h4>
                    <?= $row['maps']; ?>
                 </div>

              </div>
           </div>
        </div>

        <div class="container">
           <div class="copyright">
              &copy; Copyright 2022 - <strong><span>Pemerintah Desa Karangtengah</span></strong>
           </div>
        </div>
     </footer><!-- End Footer --><?php } ?>

  <script src="../js/main.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>