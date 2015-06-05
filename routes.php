<?php

    use RouterHelper as Router;
    //Anonymouse function
    Router::get('/register','RegisterController','getIndex');
    Router::post('/register','RegisterController','postIndex');
    Router::get('/','HomeController','index');
    Router::get('/products','ProductsController','getIndex');
    Router::get('/product','ProductController','getIndex');