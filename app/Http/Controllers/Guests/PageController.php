<?php

namespace App\Http\Controllers\Guests;
use App\Models\Comic;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function admin()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

}