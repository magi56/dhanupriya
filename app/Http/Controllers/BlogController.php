<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        {
            $blogs = Blog::all();
            return view('blog.index', compact('blogs'));
        }
    }


    public function create()
    {
        return view('blog.create');
    }


    public function store(Request $request)
    {   
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'para' => 'required'
          
        ]);
        dd($validatedData);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        Blog::create([
            'image' => $imageName,
            'para' => $request->para
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog posted successfully');
    }

    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        //
    }
}
