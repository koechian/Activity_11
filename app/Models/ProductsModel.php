<?php

namespace App\Models;

use CodeIgniter\Model;


class ProductsModel extends Model
{
    public function newCategory($category_name)
    {
        $db = db_connect();

        $res = $db->query("INSERT INTO tbl_categories (category_name)VALUES('$category_name')");

        return $res;
    }
    public function getCategories()
    {
        $db = db_connect();

        $res = $db->query("SELECT * FROM tbl_categories");

        return $res->getResultArray();
    }
    public function newProduct($productname, $product_image, $gender, $available_quantity, $unit_price, $subcategory_id, $product_description, $added_by)
    {
        $db = db_connect();

        $res = $db->query("INSERT INTO tbl_product (product_name,product_image,target_gender,available_quantity,unit_price,subcategory_id,product_description,added_by)VALUES('$productname','$product_image','$gender','$available_quantity','$unit_price','$subcategory_id','$product_description','$added_by')");

        return $res;
    }
    public function getProducts($identifier)
    {
        $db = db_connect();

        $res = $db->query("SELECT * FROM tbl_product WHERE target_gender='$identifier'");

        return $res->getResultArray();
    }
    public function deleteProduct($id)
    {
        $db = db_connect();

        $res = $db->query("DELETE FROM tbl_product WHERE product_id = $id");

        return $res;
    }
    public function deleteCategory($id)
    {
        $db = db_connect();

        $res = $db->query("DELETE FROM tbl_categories WHERE category_id = $id");

        return $res;
    }
    public function searchProducts($search_term)
    {
        $db = db_connect();

        $res = $db->query("SELECT * FROM `tbl_product` WHERE product_name LIKE '%$search_term%' LIMIT 5");

        return $res->getResultArray();
    }
}
