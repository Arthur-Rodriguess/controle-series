<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::orderBy('nome')->get();
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeDaSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeDaSerie;
        
        $serie->save();

        return redirect('/series');
    }
}
