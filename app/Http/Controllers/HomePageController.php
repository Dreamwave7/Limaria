<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function index()
    {
        return view("home.index");
    }

    public function indexSecond ()
    {
        return view("home.index_second");
    }
}
