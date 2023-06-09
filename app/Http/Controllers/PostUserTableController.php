<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostUser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostUserTableController extends Controller
{
    public function index(): View
    {
        $posts = auth()->user()->postsSub;
        return view('postUserTable.index', compact('posts'));
    }

    public function store(): \Illuminate\Http\RedirectResponse
    {
        $request = request()->validate([
            'post_id' => 'numeric|required',
        ]);
       $request['user_id'] = auth()->user()->id;
        PostUser::create($request);
        return redirect()->route('main.index');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
