@extends('layouts.index')
@section('title', 'students')
@section('content')

<?php
echo "Bạn đang xem danh mục $category <br/>";
echo $data[$category];

?>
Hello{!! $htmltest !!}
