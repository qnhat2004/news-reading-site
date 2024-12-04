<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $news = News::get();
        return view('admin.index', compact('news'));
    }
}
