<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $comments = $user->comments;
        $favorites = $user->favorite_posts;
        return view('member.dashboard',compact('comments','favorites'));
    }
}
