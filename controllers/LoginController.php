<?php


class LoginController extends BaseController {
    public function index(){
        $this->view->set('username',"ali");
        $this->view->display('login.tpl');
    }
} 