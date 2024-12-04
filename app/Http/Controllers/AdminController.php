<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $news = News::with('category')->paginate(10);
        return view('admin.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
