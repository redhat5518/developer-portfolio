
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard | Simant Kumar</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <main class="admin-dashboard">
        <header class="admin-header">
            <div>
                <h1>Blog Dashboard</h1>
                <p>Welcome, {{ auth()->user()->name }}</p>
            </div>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit">Log out</button>
            </form>
        </header>

        <section class="admin-stats">
            <div class="admin-stat-card">
                <h2>{{ $totalPosts }}</h2>
                <p>Total Posts</p>
            </div>

            <div class="admin-stat-card">
                <h2>{{ $publishedPosts }}</h2>
                <p>Published</p>
            </div>

            <div class="admin-stat-card">
                <h2>{{ $draftPosts }}</h2>
                <p>Drafts</p>
            </div>
        </section>

        <section class="admin-posts">
            <div class="admin-section-header">
                <h2>Recent Articles</h2>
                <a href="{{ route('admin.posts.create') }}" class="admin-create-button">
                    + Create New Article
                </a>
                <a href="{{ route('admin.posts.index') }}"
                class="admin-create-button">
                    Manage All Articles
                </a>
            </div>

            @forelse ($recentPosts as $post)
                <div class="admin-post-row">
                    @if ($post->featured_image)
                        <img
                            src="{{ asset('storage/' . $post->featured_image) }}"
                            alt="{{ $post->title }}"
                            class="admin-post-thumbnail"
                        >
                    @endif
                    <div>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ ucfirst($post->status) }}</p>
                    </div>
                </div>
            @empty
                <p>No articles yet. Create your first article soon!</p>
            @endforelse
        </section>
    </main>
</body>
</html>
