<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm Project</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>

body{
    background-color: gray;
}
.custom-login{
    height: 500px;
    padding-top: 100px;
}
img.slider-img{
    height: 400px;
}
.custom-product{
    height: 600px;
}
.slider-text{
    background-color: #35443585;
}
.trending-wrapper{
    margin: 30px;
}
.trending-image{
    height: 100px;
}
.trending-item{
    float: left;
    width: 20%;
}
.detail-img{
    height: 200px;
}
.search-box{
    width: 500px !important;
}
.cart-list-divider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
</style>

</html>
