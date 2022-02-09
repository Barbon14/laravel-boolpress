<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        
        return view('pages.home');
    }

    public function viewPostList() {

        $posts = Post::all();

        return view('pages.list', compact('posts'));
    }

    public function show($id) {

        $post = Post::findOrFail($id);

        return view('pages.show', compact('post'));
    }

    public function create() {

        $categories = Category::all();

        $tags = Tag::all();

        return view('pages.create', compact('categories', 'tags'));
    }

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'img' => 'nullable|string',
        ]);

        $post = Post::make($data);

        $category = Category::findOrFail($request -> get('category'));

        $post -> category() -> associate($category);
        $post->save();

        
        $tags = Tag::findOrFail($request -> get('tags'));
        
        $post -> tags() -> attach($tags);
        
        $post -> save();

        return redirect()->route('show', $post ->id);
    }
}
