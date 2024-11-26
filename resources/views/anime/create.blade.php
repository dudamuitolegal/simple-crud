<form action="{{route('anime.store')}}" method="post">
    @csrf
    @method('post')
    <div>
        <label>
            title:
        </label>
        <input type="text" name="title" id="" placeholder="title">
    </div>
    <div>
        <label>
            genre:
        </label>
        <input type="text" name="genre" id="" placeholder="genre">
    </div>

    <div>
        <label>
            episodes:
        </label>
        <input type="number" name="episodes" id="" placeholder="episodes">
    </div>
    <div>
        <label>
            status:
        </label>
        <input type="text" name="status" id="" placeholder="status">
    </div>
    <div>
        <input type="submit" value="save new anime ">
    </div>

</form>
