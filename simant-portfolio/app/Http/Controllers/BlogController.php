<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Mews\Purifier\Facades\Purifier;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->paginate(6);

        return view('blog.index', compact('posts'));
    }


    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $post->content = Purifier::clean($post->content);
        return view('blog.show', compact('post'));
    }

}
