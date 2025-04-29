<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Laravel sẽ tự liên kết với bảng 'products' (dựa theo tên model)
    // Tên class phải đúng với tên model áp dụng chung cho Controller

    // trường hợp tên bảng đặt lạ không đúng chuẩn thì ta khai báo lại bảng như sau:
    protected $Category='Category';
    public static function getCategory_ById($category_id){

    return self:: where('category_id',$category_id)->first();

    }
}


?>
