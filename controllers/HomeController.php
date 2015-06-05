<?php


class HomeController extends PagesFromMasterTpl{
    public function index(){
        $this->templateEngine->set('shops',$this->shops);
        $this->templateEngine->display('front/index.tpl');
    }
} 