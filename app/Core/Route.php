<?php
class Route
{
   protected $controller  = 'home';
   protected $method      = 'index';
   protected $parameter      = [];

   public function __construct()
   {
      if (isset($_GET['url'])) {
         $url = explode('/', filter_var(trim($_GET['url'])), FILTER_SANITIZE_URL);
      }

      $url[0] = $url[0] . 'Controller.php';

      if (file_exists('../app/Controllers/' . $url[0])) {
         $this->controller = $url[0];
      }

      require_once '../app/controllers/' . $this->controller;
      die($this->controller);
      if (isset($url[1])) {
         if (method_exists($this->controller, $url[1])) {
            echo ' gas';
         }
      }
   }
}
