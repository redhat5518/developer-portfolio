@extends('layouts.app')

@section('title', 'Technical Blog | Simant Kumar')

@section('meta_description', 'Read technical articles, programming tutorials, backend development insights and software engineering experiences.')

@section('content')

<section class="blog-page">
    <div class="blog-container">

        <div class="blog-header">
            <span class="blog-label">MY BLOG</span>
            <h1>Thoughts, Tutorials & Insights</h1>
            <p>
                Sharing my experience, technical knowledge,
                and lessons learned while building software.
            </p>
        </div>

        @if($posts->count() > 0)

            <div class="blog-grid">

                @foreach($posts as $post)

                    <article class="blog-card">

                        @if($post->featured_image)
                            <img
                                src="{{ asset('storage/' . $post->featured_image) }}"
                                alt="{{ $post->title }}"
                                class="blog-card-image"
                            >
                        @else
                            <div class="blog-card-placeholder">
                                <span>Article</span>
                            </div>
                        @endif

                        <div class="blog-card-content">

                            <span class="blog-date">
                                {{ $post->published_at->format('M d, Y') }}
                            </span>

                            <h2>{{ $post->title }}</h2>

                            <p>
                                {{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 140) }}
                            </p>

                            <a href="{{ route('blog.show', $post->slug) }}" class="blog-read-more">
                                Read Article →
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

            <div class="blog-pagination">
                {{ $posts->links() }}
            </div>

        @else

            <div class="blog-empty">
                <h2>No articles published yet</h2>
                <p>New articles will appear here soon.</p>
            </div>

        @endif

    </div>
</section>

@endsection
