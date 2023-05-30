<?php

namespace App\Http\Controllers;

use App\Models\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Fumetto::all();
        return view('comics', compact('comics'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
        ];

        Fumetto::create($data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fumetto $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Fumetto $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fumetto $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Fumetto $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fumetto  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $comic)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
        ];

        Fumetto::update($data);

        return to_route('admin.comics.index')->with('message', 'comic updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fumetto $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $comic)
    {
    }
}
