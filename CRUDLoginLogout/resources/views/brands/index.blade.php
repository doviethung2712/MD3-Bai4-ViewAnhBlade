<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{route("brand.create")}}">Create Brands</a>
        <a href="{{route('logout')}}">Logout</a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $key => $brand)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$brand->name}}</td>
                    <td><a href="{{route('brand.detail',$brand->id)}}">Detail</a></td>
                    <td><a href="{{route('brand.edit',$brand->id)}}">Update</a></td>
                    <td><a onclick="return confirm('Are you sure')" href="{{route('brand.delete',$brand->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
