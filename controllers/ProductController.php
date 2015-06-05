<?php
/**
 * Created by PhpStorm.
 * User: 402-13
 * Date: 6/5/2015
 * Time: 9:40 AM
 */

class ProductController extends PagesFromMasterTpl {
    private $productID;
    private function setProduct(){
        $productModelObj = new Product();
        $product = $productModelObj->get($this->productID);
        $this->templateEngine->set('product',$product);
    }
    private function setProductIDQueryString(){
        if( isset($_GET['product_id'])){
            $this->productID = $_GET['product_id'];
        }else{
            die;
        }
    }
    public function getIndex(){

        throw new Exception("my exception");
        $this->templateEngine->set('shops',$this->shops);
        $this->setProductIDQueryString();
        $this->setproduct($_GET['product_id']);
        $this->templateEngine->display('front/product.tpl');
    }
} 