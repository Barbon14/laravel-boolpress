<?php

namespace App\Http\Controllers;
use App\Post;

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

        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'img' => 'nullable|string',
        ]);

        $post = Post::create($data);

        return redirect()->route('show', $post ->id);
    }
}
