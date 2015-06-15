<?php


class HomeController extends BaseController{
    public function index(){

        $this->templateEngine->set('greeting','WELCOME TO MVC 4 DUMMIES FRAMEWORK');
        $this->templateEngine->display('front/index.tpl');
    }
} 