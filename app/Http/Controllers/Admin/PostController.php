<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->paginate(10);
        return view('admin.pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.pages.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       if($request->has('image')){
           $file_name =$request->image. '_'. now();
           $request->file('image')->storeAs('images',$file_name,'public');
       }
        $tags = $request->tag;
        $post = auth()->user()->posts()->create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'image' =>$file_name ?? null,
                'category_id' => $request->category
            ]
        );
        foreach ($tags as $tag) {
            $post->tags()->attach($tag);
        }
        return redirect()->route('admin.post.index');
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
        $post = Post::query()->find($id);
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.pages.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if($request->has('image')){
            $file_name =$request->image. '_'. now();
            $request->file('image')->storeAs('images',$file_name,'public');
        }
        $post->update(
            ['title' => $request->title,
                'image' => $file_name ?? $post->image,
                'description' => $request->description,
                'category_id' => $request->category]
        );
        $newTags = [];
        $tags = $request->tag;
        foreach ($tags as $tag) {
            array_push($newTags, $tag);
        }
        $post->tags()->sync($newTags);
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
        return redirect()->back();
    }
}
