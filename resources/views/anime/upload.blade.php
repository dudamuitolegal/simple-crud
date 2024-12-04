<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploadt</title>
    @vite('resources/css/app.css')

</head>
<body>
<h1> UPLOAD FORM</h1>

@session('success')
    <p>{{session('success')}}</p>
@endsession

@session('error')
    <p>{{session('error')}}</p>
@endsession



<form action="{{route('upload.archive')}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('POST')
    <div>
        <input type="file" name="feng" id="feng">
        <label for="feng">UPLOAD ARCHIVE</label>
    </div>
    <div class="border-2 border-black-900">
        <input type="text" name="feng2" value="guio">
    </div>
    <input type="submit" value="SEND ARCHIVE">
    <img class="w-[500px] h-[500px]" src="{{asset('storage/archives/CVIGRRypunSUjSiZPjYxcbIPkj2jYSShN1YXTLhp.jpg')}}">
</form>

</body>
</html>
