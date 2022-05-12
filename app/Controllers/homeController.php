<?php
class HomeController extends Controller
{

   public function test($name)
   {
      echo $name;
   }

   public function index()
   {
      echo "ini default method index";
   }
}
