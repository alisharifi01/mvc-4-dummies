<?php


class PagesFromMasterTpl extends BaseController{
    protected $shops;
    private function getShops(){
        $shopsModelObj = new Shop;
        $this->shops = $shopsModelObj->all();

    }
    public function __construct(){
        $this->getShops();
    }
} 