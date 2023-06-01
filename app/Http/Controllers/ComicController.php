<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
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
        $val_data = $request->validate([
            'title' => 'required|min:5|max:200',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable',

        ]);
        // dd($request->all());
        // $data = [
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'thumb' => $request->thumb,
        //     'price' => $request->price,
        //     'sale_date' => $request->sale_date,
        //     'type' => $request->type,
        // ];

        Comic::create($val_data);

        return to_route('admin.index')->with('message', 'is add new');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic $Comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $Comic)
    {
        //dd($request->all());
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
        ];
        //dd($data);

        $Comic->update($data);

        return to_route('admin.index')->with('message', 'comic updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('admin.index')->with('message', 'comic deleted'); 
    }
}
