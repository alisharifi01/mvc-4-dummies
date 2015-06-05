<?php

class RegisterController  extends  BaseController{

    private $viewPath = 'front/register.tpl',
            $inputs = [],
            $errors = [];
    public function getIndex(){
        $this->templateEngine->display($this->viewPath);
    }

    public function postIndex(){
        $this->getInputs();
        if ($this->validate()){
            $this->register();
        }else {
            //TODO set errors to view
        }

    }
    private function validate(){
        return true;
    }
    private function register(){
        $userModel = new User();
        $insertion = $userModel->insert( [ $this->inputs['username'] ,
                              $this->inputs['password'] ,
                              $this->inputs['email']
                            ]);
        $this->templateEngine->set('registerSuccessMsg',REGISTER_SUCCESS_MSG);
        $this->templateEngine->display($this->viewPath);
    }
    private function getInputs(){
        $this->inputs['username'] = $_POST['username'];
        $this->inputs['email'] = $_POST['email'];
        $this->inputs['password'] = $_POST['password'];
    }
} 