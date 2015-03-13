<?php


class Router{
    private static $instance;
    private $uri;
    private  $templateEngine;
    public function __construct(){
        $this->templateEngine = new TemplateEngine();
        $this->setPath();
    }
    public function setPath(){
        $phpSelf = $_SERVER['PHP_SELF'];
        $rootPath = str_replace("index.php","",$phpSelf);
        $this->uri = str_replace($rootPath,"/",$_SERVER['REQUEST_URI']);
    }
    public function get($path,$controller,$method){
        if($path == $this->uri AND $_SERVER['REQUEST_METHOD'] == "GET"){
            $this->execute($path,$controller,$method);
        }else{
            //throw exception in debug mode
        }
    }
    private function execute($path,$controller,$method){
        $controller = new $controller();
        $controller->setTemplateEngine($this->templateEngine);
        $controller->$method();
    }
    public function post($path,$controller,$method){
        if($path == $this->uri AND $_SERVER['REQUEST_METHOD'] == "POST"){
            $this->execute($path,$controller,$method);
        }else{
            //throw exception in debug mode
        }

    }

}
