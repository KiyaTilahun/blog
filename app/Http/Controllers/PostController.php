<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::where('user_id',auth()->id())->get();
       
        return view('posts.index',compact('post'));
        //
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
    //    dd( $request->file('photo')->getClientOriginalName());
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
             'categories'=>'required',
             'photo'=>'required|image|max:2048|mimes:jpeg,png,gif'
        ]);
  
        $categories=$validatedData['categories'];
       
        // Create the new post
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];

        $categoryNames = Category::whereIn('id', $validatedData['categories'])->pluck('name')->toArray();
        // categories in database
        $post->category = implode(',', $categoryNames);
        $photo = $validatedData['photo'];

        $extension = $photo->getClientOriginalExtension();
        $name=auth()->user()->name.now()->format('YmdHis').'.'.$extension;
        $post->image =$name; 
        $post->user_id = auth()->user()->id; 
        // storing file
       Storage::putFileAs('images',$request->file('photo'),$name);
        $post->save();
        foreach ($validatedData['categories'] as $categoryId) {
            $post->categories()->attach($categoryId);
        }
    
return to_route('users.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        $post = Post::find($id);
        
        return view('posts.edit',compact('post'));
        


       
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
