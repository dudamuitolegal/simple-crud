<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Música</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Adicionar Música</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro(s) encontrado(s):</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('songs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="song_name" class="form-label">Nome da Música</label>
            <input type="text" class="form-control" id="song_name" name="song_name" value="{{ old('song_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="artist_name" class="form-label">Nome do Artista</label>
            <input type="text" class="form-control" id="artist_name" name="artist_name" value="{{ old('artist_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="path_image" class="form-label">URL da Imagem</label>
            <input type="url" class="form-control" id="path_image" name="path_image" value="{{ old('path_image') }}" required>
        </div>
        <div class="mb-3">
            <label for="path_song" class="form-label">URL da Música</label>
            <input type="url" class="form-control" id="path_song" name="path_song" value="{{ old('path_song') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
</body>
</html>
