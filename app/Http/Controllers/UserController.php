<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::paginate(10);
        return view('adminUser.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('adminUser.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('adminPost.edit', compact('user'));
    }

    public function update(User $user)
    {
        $userData = request()->validate([
            'load_by' => 'required',
            'type' => 'required',
            'heading' => 'required',
            'description' => 'required',
            'price' => 'required',
            'can_pay_pushkin' => 'nullable',
            'city' => 'required',
            'address' => 'required'
        ]);
        //if(!array_key_exists('can_pay_pushkin', $postData)) $postData['can_pay_pushkin'] = false;
        $user->update($userData);
        return redirect()->route('admin.user.show', $user->id);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
