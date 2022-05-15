<?php
class HomeController extends Controller
{
   public function index()
   {

      return $this->view('index');
   }

   public function berita()
   {
      return $this->view('berita-desa');
   }

   public function wisata()
   {
      return $this->view('wisata-desa');
      // $user = $this->model('user');
      // return $this->view('berita-desa', ['nickname' => $user->nickname, 'nama' => $user->name]);
   }

   public function detail_wisata()
   {
      return $this->view('detail-wisata');
   }

   public function produk()
   {
      return $this->view('produk-desa');
   }

   public function visimisi()
   {
      echo 'bagian visi dan misi';
   }

   public function sejarah()
   {
      return $this->view('sejarah');
   }
}
