<?php

  class SimpleFormController extends BaseController
  {
      public function getIndex()
      {
          $this->templateEngine->display('simple-form.tpl');
      }
      public function postIndex()
      {
          $this->templateEngine->assign('inputPosted',$_POST['foo']);
          $this->templateEngine->display('simple-form.tpl');
      }
  }
?>
