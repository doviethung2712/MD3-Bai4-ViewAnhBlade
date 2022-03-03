<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('brand.update',$brand->id)}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$brand->name}}">
        <button>Update</button>
        <a href="{{route('brand.index')}}">Back</a>
    </form>
</body>
</html>
