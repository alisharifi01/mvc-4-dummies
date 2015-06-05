<?php


class SmartyTemplateEngine implements TemplateEngine {
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty;
        $this->config();
    }
    private function config(){
        $this->smarty->debugging = DEBUGGING;
        $this->smarty->caching = false;
        $this->smarty->cache_lifetime = 120;
        $this->smarty->setTemplateDir(TEMPLATE_DIR)
            ->setCompileDir(COMPILE_DIR)
            ->setCacheDir(VIEW_CACHE_DIR)
            ->setConfigDir(VIEW_CONFIG_DIR);

        $this->smarty->muteExpectedErrors();
    }
    public function set($var,$value){
        $this->smarty->assign($var,$value);
    }
    public function display($tpl){
        $this->smarty->display($tpl);
    }
} 