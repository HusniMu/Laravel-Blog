<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::authors()
                ->withCount('posts')
                ->withCount('comments')
                ->withCount('favorite_posts')
                ->get();
        return view('admin.author.index',compact('authors'));
    }
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.author.edit', compact('user', 'roles'));
    }
    public function updateAuthority(Request $request, User $user)
    {
        // return $request;
        $this->validate($request, [
            'role' => 'required',
        ]);

        $user->role_id = $request->role;
        $user->save();

        Toastr::success('Authority Successfully Updated', 'Success');
        return redirect()->route('admin.author.index');
    }

    public function destroy($id)
    {
        $author = User::findOrFail($id)->delete();
        Toastr::success('Author Successfully Deleted','Success');
        return redirect()->back();
    }
}
