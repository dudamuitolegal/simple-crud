<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Path;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // Mostrar o formulário
    public function create()
    {
        return view('songs.create');
    }

    // Salvar os dados
    public function store(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'song_name' => 'required|string|max:255',
            'artist_name' => 'required|string|max:255',
            'path_image' => 'required|url',
            'path_song' => 'required|url',
        ]);

        // Criar a música
        $song = Song::create([
            'song_name' => $validated['song_name'],
            'artist_name' => $validated['artist_name'],
        ]);

        // Criar o path relacionado
        Path::create([
            'song_id' => $song->id,
            'path_image' => $validated['path_image'],
            'path_song' => $validated['path_song'],
        ]);

        return redirect()->route('songs.create')->with('success', 'Música adicionada com sucesso!');
    }
}
