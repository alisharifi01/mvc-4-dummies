<?php

class Product extends BaseModel{
    public $table = "products";
    public static function getByShopID($shopID){
        $query = "SELECT * FROM products WHERE shop_id = ?";
        $params = [ $shopID ];
        return DB::getAll($query,$params);
    }
} 