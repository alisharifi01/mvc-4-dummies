<?php
use Helper\RouterHelper as Router;
    Router::get("/simple-form","SimpleFormController","getIndex");
    Router::post("/simple-form","SimpleFormController","postIndex");
    Router::get("/","HomeController","index");