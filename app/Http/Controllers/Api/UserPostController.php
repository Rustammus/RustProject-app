<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserPostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return PostResource::collection($posts);
    }

    public function filter()
    {
        $postData = request()->validate([
            'type' => '',
            'city' => ''
        ]);
        $query = Post::query();

        if (isset($postData['type']))
        {
            $query->where('type', $postData['type']);
        }
        if (isset($postData['city']))
        {
            $query->where('city', $postData['city']);
        }

        $posts = $query->get()->reverse()->paginate(10);
        //$posts->add(['nofilter' => $nofilter]);
        return view('userPost.index', compact('posts'));
    }


    public function store(): \Illuminate\Http\RedirectResponse
    {
        $postData = request()->validate([
           'type' => 'required',
           'heading' => 'required',
           'description' => 'required',
           'price' => 'required',
           'can_pay_pushkin' => 'nullable',
           'city' => 'required',
           'address' => 'required'
        ]);
        $postData['load_by'] = auth()->user()->name;
        $postData['author_id'] = auth()->user()->id;
        Post::create($postData);
        return redirect()->route('main.index');
    }

    public function show(Post $post)
    {
        return new PostResource($post);
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
