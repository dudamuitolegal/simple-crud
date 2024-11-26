<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>create</h1>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="save a new product">
        </div>
    </form>
</body>
</html>
