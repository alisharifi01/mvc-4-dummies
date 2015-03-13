<?php
 


  /* Class that extends Smarty, used to process and display Smarty
  files */

  class TemplateEngine extends Smarty
  {
      private function config(){
          $this->debugging = DEBUGGING;
          $this->caching = false;
          $this->cache_lifetime = 120;
          //Change the default template directories
          $this->setTemplateDir(TEMPLATE_DIR)
              ->setCompileDir(COMPILE_DIR)
              ->setCacheDir(VIEW_CACHE_DIR)
              ->setConfigDir(VIEW_CONFIG_DIR);

          $this->muteExpectedErrors();
      }
    public function __construct()
    {
        parent::__construct();
        $this->config();
    }
  }  
?>
