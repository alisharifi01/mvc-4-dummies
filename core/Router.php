<?php


class Router
{
    private $pathOnURI,
            $templateEngine;
    public function __construct()
    {
        $this->getPath();
    }

    private function getPath()
    {
        $phpSelf = str_replace("index.php", "", $_SERVER['PHP_SELF']);
        $completePathOnURI = str_replace($phpSelf, "/", $_SERVER['REQUEST_URI']);
        $explodedCompletePathOnURI = explode("?",$completePathOnURI);
        $this->pathOnURI = $explodedCompletePathOnURI[0];
    }

    private function callWithAnonymouseFunction($action){
        $action();
    }
    private function callWithControllerMethod($controllerClassName,$method){

        Container::register($controllerClassName,function() use(&$controllerClassName) //registering a dependency on the fly
        {
            //set template engine
            $templateEngineClassName = ucfirst(TEMPLATE_ENGINE) . "TemplateEngine";
            $templateEngineObj = new $templateEngineClassName();
            $templateEngineObj->set('SITE_ROOT_URL', SITE_ROOT_URL);
            //
            $controller = new $controllerClassName();
            $controller->setTemplateEngine($templateEngineObj);
            return $controller;
        });

        $controller = Container::getInstance($controllerClassName);
        $controller->$method();
    }
    public function get()
    {
        $args = func_get_args();
        $path = $args[0];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($path == $this->pathOnURI) {
                if( count($args) == 2){
                    $action = $args[1];
                    $this->callWithAnonymouseFunction($action);
                }else if( count($args) == 3){
                    $controllerClassName = $args[1];
                    $method = $args[2];
                    $this->callWithControllerMethod($controllerClassName,$method);
                }
            }
        }

        //

    }


    public function post($path, $action)
    {
        $args = func_get_args();
        $path = $args[0];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($path == $this->pathOnURI) {
                if( count($args) == 2){
                    $action = $args[1];
                    $this->callWithAnonymouseFunction($action);
                }else if( count($args) == 3){
                    $controllerClassName = $args[1];
                    $method = $args[2];
                    $this->callWithControllerMethod($controllerClassName,$method);
                }
            }
        }
    }
} 