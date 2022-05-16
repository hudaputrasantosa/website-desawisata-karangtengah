<?php
class Route
{
   protected $controller  = 'homeController';
   protected $method      = 'index';
   protected $parameter      = [];

   public function __construct()
   {
      if (isset($_GET['url'])) {
         $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
         $url[0] = $url[0] . 'Controller';
      } else {
         $url[0] = 'home';
      }



      if (file_exists('../app/Controllers/' . $url[0] . '.php')) {
         $this->controller = $url[0];
      }

      require_once '../app/controllers/' . $this->controller . '.php';
      $this->controller = new $this->controller;


      if (isset($url[1])) {
         if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
         } else {
            return require_once('../app/Views/Errors/404.php');
         }
      }

      unset($url[0]);
      unset($url[1]);
      $this->parameter = $url;
      call_user_func_array([$this->controller, $this->method], $this->parameter);
   }
}
