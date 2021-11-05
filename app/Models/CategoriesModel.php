<?php

namespace App\Models;

use CodeIgniter\Model;


class CategoriesModel extends Model
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
}
