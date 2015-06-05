<?php

    //dependencies.php
    /**
     * application wide dependencies
     * @var array
     * @return array array of dependencies
     */
    return [ //php 5.4 syntax
        'HomeController' => function() {
            $templateEngineClassName = ucfirst(TEMPLATE_ENGINE) . "TemplateEngine";
            $templateEngineObj = new $templateEngineClassName();
            $templateEngineObj->set('SITE_ROOT_URL', SITE_ROOT_URL);
            //
            $controller = new HomeController();
            $controller->setTemplateEngine($templateEngineObj);
            return $controller;
        }
        //register more class dependencies here.
    ];