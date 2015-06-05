<?php


abstract class BaseController {
    protected $templateEngine;
    public function setTemplateEngine(TemplateEngine $templateEngine){
        $this->templateEngine = $templateEngine;
    }
} 