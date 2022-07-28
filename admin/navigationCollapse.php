<?php
session_start();

if (!isset($_SESSION['login'])) {
   header("location: ./index.php");
   exit;
}
include 'config.php';
?>
<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
   <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="dashboard.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
         <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
            </a></li>
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">

         <li>
            <a class="profile-pic" href="#"> <img src="images/users/hritik.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b> </a>
         </li>
      </ul>
   </div>

</nav>
<div class="navbar-default sidebar nicescroll" role="navigation">
   <div class="sidebar-nav navbar-collapse ">
      <ul class="nav" id="side-menu">
         <li class="sidebar-search hidden-sm hidden-md hidden-lg">
            <div class="input-group custom-search-form">
               <input type="text" class="form-control" placeholder="Search...">
               <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
               </span>
            </div>
         </li>
         <li>
            <a href="./dashboard" class="waves-effect">
               Profil Desa</a>
         </li>
         <li>
            <a href="./berita-admin" class="waves-effect">Berita Desa</a>
         </li>
         <li>
            <a href="./wisata-admin" class="waves-effect">Wisata Desa</a>
         </li>
         <li>
            <a href="./produk-admin" class="waves-effect">Produk Desa</a>
         </li>
         <li>
            <a href="./foto-pengurus" class="waves-effect">Foto Pengurus</a>
         </li>
         <li>
            <a href="./footer-admin" class="waves-effect">Footer</a>
         </li>

      </ul>
      <div class="center p-20">
         <span class="hide-menu"><a href="./logout.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Keluar</a></span>
      </div>
   </div>
   <!-- /.sidebar-collapse -->
</div>