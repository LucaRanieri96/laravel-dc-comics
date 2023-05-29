<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

}