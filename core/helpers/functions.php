<?php
    function dd($toDump){
        var_dump($toDump);
        die;
    }
    function pad($array){
        echo "<pre>";
        print_r($array);
        die;
    }
    function print_array($array){
        echo "<pre>";
        print_r($array);
    }

    function defineSiteRootUrl(){
        return $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].str_replace("/index.php","",$_SERVER['PHP_SELF']);
    }