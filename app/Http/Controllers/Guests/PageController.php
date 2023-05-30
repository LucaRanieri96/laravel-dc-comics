<?php

namespace App\Http\Controllers\Guests;
use App\Models\Fumetto;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function admin()
    {
        $comics = Fumetto::all();
        return view('admin.comics.index', compact('comics'));
    }

}