<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class Category_Controller extends Controller{
public function Category(Request $request, $category_id){
    $categories = Category::getCategory_ById($category_id);

    return view('page.category.index',['category'=>$categories]);
}};
?>
