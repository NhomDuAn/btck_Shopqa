<?php
use App\Http\Controllers\Qlch_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

// Route::get('/qlch/{category_id}',[Qlch_Controller::class,'categorys']);

?>
