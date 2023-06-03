<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(10);
        return view('adminPost.index', compact('posts'));
    }

    public function create(): View
    {
        return view('adminPost.create');
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        $postData = request()->validate([
           'load_by' => 'required',
           'type' => 'required',
           'heading' => 'required',
           'description' => 'required',
           'price' => 'required',
           'can_pay_pushkin' => 'nullable',
           'city' => 'required',
           'address' => 'required'
        ]);
        Post::create($postData);
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {
        return view('adminPost.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('adminPost.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $postData = request()->validate([
            'load_by' => 'required',
            'type' => 'required',
            'heading' => 'required',
            'description' => 'required',
            'price' => 'required',
            'can_pay_pushkin' => 'nullable',
            'city' => 'required',
            'address' => 'required'
        ]);
        if(!array_key_exists('can_pay_pushkin', $postData)) $postData['can_pay_pushkin'] = false;
        $post->update($postData);
        return redirect()->route('admin.post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
