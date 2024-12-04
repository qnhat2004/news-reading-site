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
        $news = News::with('category');
        return view('admin.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|string|max:255',
        ]);

        News::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'image'=> $request->image,
            'category_id'=> $request->category_id,
            // 'created_at'=> now(),
        ]);
        return redirect()->route('admin.index')
            ->with('success','New article created successfully.');
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
