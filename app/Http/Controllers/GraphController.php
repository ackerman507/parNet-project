<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index() {
        $news = News::all();
        return view('graficas.index', compact('news'));
    }
}
