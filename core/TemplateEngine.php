<?php


interface TemplateEngine {
    public function set($var,$value);
    public function display($tpl);
} 