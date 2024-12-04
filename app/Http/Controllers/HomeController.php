<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $news = News::latest()->get();
    //     return view('home.index', compact('news'));
    // }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.detail', compact('news'));
    }

    public function index(Request $request)
    {
        $query = $request->input('search');
        if ($query) {
            $news = News::where('title', 'like', "%{$query}%")->get();  // Tìm kiếm theo tiêu đề
        } else {
            $news = News::latest()->get();  // Lấy tất cả nếu không tìm kiếm
        }

        return view('home.index', compact('news'));
    }
}
