<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Qlch_Controller extends Controller{
public function categorys(Request $request, $category_id){
    $data = [
        '001'=> 'Ao dai',
        '002'=>'Áo Tay ngắn',
        '003'=>'Quần Đùi',
    ];

    return view('page.category.index',[
        'category'=>$category_id,
        'data'=> $data,
        'htmltest' =>" <b style=' color :red;' >Test thử dữ liệu demo</b>"
    ]);
}};
?>
