<?php

  class HomeController extends BaseController
  {
      public function index(){
          $this->templateEngine->assign('greeting','PHP MVC 4 Dummies');
          $this->templateEngine->display('home.tpl');
      }  
  }
?>
