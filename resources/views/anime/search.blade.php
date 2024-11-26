
@if($animes->isEmpty())
    <p>No animes found.</p>
@else
    <ul class="px-">
        @foreach($animes as $anime)
            <li>{{ $anime->title }} - {{ $anime->genre }}</li>
        @endforeach
    </ul>

@endif

