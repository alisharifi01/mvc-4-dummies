<?php

class ProductsController extends PagesFromMasterTpl {
    private $shopID;
    private function setProducts(){
        $this->templateEngine->set('products',Product::getByShopID($this->shopID));
    }
    private function setShopIDQueryString(){
        if( isset($_GET['shop_id'])){
            $this->shopID = $_GET['shop_id'];
        }else{
            die;
        }
    }
    public function getIndex(){
        $this->templateEngine->set('shops',$this->shops);
        $this->setShopIDQueryString();
        $this->setproducts($_GET['shop_id']);
        $this->templateEngine->display('front/products.tpl');
    }
} 