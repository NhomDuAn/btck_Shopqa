@extends('layouts.index')
@section('title', 'category')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nội Dung truyền vào đây</h1>
    <h2>Thông tin:{{$category ? $category : 'Không có dữ liệu'}}</h2>

</body>
</html>
