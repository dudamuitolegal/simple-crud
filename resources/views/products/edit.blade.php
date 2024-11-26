<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>edit</h1>

    <form action="{{route('product.update', ['product' => $product])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}" >
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="update" >
        </div>
    </form>
</body>
</html>
