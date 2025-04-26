<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App- @yield('title')</title>
</head>
<body>
    @include('layouts.header.index')
    <div class='container'>
        <h2>Nội Dung Chèn vào đây</h2>
        @yield('content')
        <!-- khối lệnh này được lấy nội dung trong khối lệnh section trong mục students.index -->
         <!-- nguyên tăc link là phải đi từ view -->
    </div>
    @include('layouts.footer.index')
</body>
</html>
