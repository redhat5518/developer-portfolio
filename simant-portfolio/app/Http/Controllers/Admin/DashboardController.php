<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();

        $publishedPosts = Post::where('status', 'published')->count();

        $draftPosts = Post::where('status', 'draft')->count();

        $recentPosts = Post::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'draftPosts',
            'recentPosts'
        ));
    }
}