<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Articles | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

<main class="admin-dashboard">

    <header class="admin-header">
        <div>
            <h1>Manage Articles</h1>
            <p>View, search, edit and delete your blog articles.</p>
        </div>

        <a href="{{ route('admin.posts.create') }}"
           class="admin-create-button">
            + Create Article
        </a>
    </header>

    @if (session('success'))
        <p class="admin-success">{{ session('success') }}</p>
    @endif

    <!-- Search and filter form -->
    <form method="GET" action="{{ route('admin.posts.index') }}"
          class="admin-filter-form">

        <input
            type="text"
            name="search"
            placeholder="Search article title..."
            value="{{ request('search') }}"
        >

        <select name="status">
            <option value="">All Statuses</option>

            <option value="draft"
                {{ request('status') === 'draft' ? 'selected' : '' }}>
                Draft
            </option>

            <option value="published"
                {{ request('status') === 'published' ? 'selected' : '' }}>
                Published
            </option>
        </select>

        <button type="submit">Search</button>

        <button type="reset" class="admin-reset-button">
            Reset
        </button>

    </form>

    <!-- Article list -->
    <section class="admin-posts">

        @forelse ($posts as $post)

            <div class="admin-post-row">

                <div class="admin-post-info">

                    @if ($post->featured_image)
                        <img
                            src="{{ asset('storage/' . $post->featured_image) }}"
                            alt="{{ $post->title }}"
                            class="admin-post-thumbnail"
                        >
                    @endif

                    <div>
                        <h3>{{ $post->title }}</h3>

                        <p>
                            Status:
                            <strong>{{ ucfirst($post->status) }}</strong>
                        </p>

                        <small>
                            Created: {{ $post->created_at->format('d M Y') }}
                        </small>
                    </div>

                </div>

                <div class="admin-post-actions">

                    <button type="submit" class="admin-edit-button">
                        Edit
                    </button>

                    <form
                        method="POST"
                        action="{{ route('admin.posts.destroy', $post) }}"
                        onsubmit="return confirm('Are you sure you want to delete this article?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="admin-delete-button">
                            Delete
                        </button>
                    </form>

                </div>

            </div>

        @empty

            <p>No articles found.</p>

        @endforelse

        {{ $posts->links() }}

    </section>

    

    <p>
        <a href="{{ route('admin.dashboard') }}" class="admin-back-link">
            <span aria-hidden="true">←</span>
            Back to Dashboard
        </a>
    </p>

</main>

</body>
</html>
