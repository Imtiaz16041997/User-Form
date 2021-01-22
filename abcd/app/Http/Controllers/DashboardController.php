<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {
        // dd(auth()->user()->posts);
        // dd(Post::find(13)->created_at);
        return view('dashboard');
    }
}
