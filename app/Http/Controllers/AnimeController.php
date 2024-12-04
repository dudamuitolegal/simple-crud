<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::paginate(1);
        return view('anime.index', compact('animes'));
    }

    public function create()
    {
        return view('anime.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'episodes' => 'required',
        ]);
        $newAnime = Anime::create($data);
        return redirect(route('anime.index'));
    }

    public function edit(Anime $anime)
    {
        return view('anime.edit', ['anime' => $anime]);
    }

    public function update(Request $request, Anime $anime)
    {
        $data = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'episodes' => 'required',
        ]);
        $anime->update($data);
        return redirect(route('anime.index'))->with('success', 'Anime updated successfully');
    }

    public function destroy(Anime $anime)
    {
        $anime->delete();
        return redirect(route('anime.index'))->with('success', 'Anime deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $animes = Anime::where('title', 'like', "%{$search}%")
            ->orWhere('genre', 'like', "%{$search}%")
            ->get();

        return view('anime.search', compact('animes'));
    }


    public function uploadForm(){
        return view('anime.upload');

    }
    public function uploadArchive(Request $request){

        $file = $request->file('feng')->store('archives', 'public');

    }
}
