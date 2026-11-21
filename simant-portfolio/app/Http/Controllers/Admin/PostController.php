<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Mews\Purifier\Facades\Purifier;

class PostController extends Controller
{
    /**
     * Display the article creation form.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Validate and save a new article.
     */
    public function store(Request $request)
    {
        // Step 1: Validate the submitted form data.
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'status' => ['required', 'in:draft,published'],
            'featured_image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,webp',
                'max:2048',
            ],
        ]);

        $validated['content'] = Purifier::clean($validated['content']);
        
        $imagePath = null;

        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')
                ->store('posts', 'public');
        }

        // Step 2: Generate a URL-friendly slug.
        $slug = Str::slug($validated['title']);

        // Step 3: Ensure the slug is unique.
        $originalSlug = $slug;
        $counter = 1;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Step 4: Save the article.
        Post::create([
            'author_id' => auth()->id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'excerpt' => $validated['excerpt'] ?? null,
            'content' => $validated['content'],
            'featured_image' => $imagePath,
            'status' => $validated['status'],
            'published_at' => $validated['status'] === 'published'
                ? now()
                : null,
        ]);

        // Step 5: Return to the dashboard.
        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Article created successfully!');
    }

    public function index(Request $request)
    {
        $query = Post::latest();

        // Search by article title.
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filter by article status.
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $posts = $query->paginate(10)->withQueryString();

        return view('admin.posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'status' => ['required', 'in:draft,published'],
            'featured_image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,webp',
                'max:2048',
            ],
        ]);

        // Generate a unique slug, excluding the current article.
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (
            Post::where('slug', $slug)
                ->where('id', '!=', $post->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Keep the existing image unless a new one is uploaded.
        $imagePath = $post->featured_image;

        if ($request->hasFile('featured_image')) {

            // Remove the previous image.
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }

            // Save the replacement image.
            $imagePath = $request->file('featured_image')
                ->store('posts', 'public');
        }

        // Set publication date when publishing.
        $publishedAt = $post->published_at;

        if ($validated['status'] === 'published' && !$publishedAt) {
            $publishedAt = now();
        }

        if ($validated['status'] === 'draft') {
            $publishedAt = null;
        }

        $post->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'excerpt' => $validated['excerpt'] ?? null,
            'content' => $validated['content'],
            'featured_image' => $imagePath,
            'status' => $validated['status'],
            'published_at' => $publishedAt,
        ]);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Article updated successfully!');
    }

    public function destroy(Post $post)
    {
        // Delete the associated image first.
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }

        // Delete the article from the database.
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Article deleted successfully!');
    }
}
