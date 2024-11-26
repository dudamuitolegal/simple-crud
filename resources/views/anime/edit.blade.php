<form action="{{route('anime.update', ['anime' => $anime])}}" method="post">
    @csrf
    @method('put')
    <div>
        <label>
            title:
        </label>
        <input type="text" name="title" id="" placeholder="title" value="{{$anime->title}}">
    </div>
    <div>
        <label>
            genre:
        </label>
        <input type="text" name="genre" id="" placeholder="genre" value="{{$anime->genre}}">
    </div>

    <div>
        <label>
            episodes:
        </label>
        <input type="number" name="episodes" id="" placeholder="episodes" value="{{$anime->episodes}}">
    </div>
    <div>
        <label>
            status:
        </label>
        <input type="text" name="status" id="" placeholder="status" value="{{$anime->status}}">
    </div>
    <div>
        <input type="submit" value="update">
    </div>

</form>


