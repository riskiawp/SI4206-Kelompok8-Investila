<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $artikel = Article::all();
        return view('index', compact('artikel'));
    }
}
