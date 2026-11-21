@extends('layouts.app')

@section('title', $post->meta_title ?: $post->title . ' | Simant Kumar')

@section('meta_description', $post->meta_description ?: ($post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 155)))

@section('content')

<section class="article-page">
    <div class="article-container">

        <a href="{{ route('blog.index') }}" class="admin-back-link">
            ← Back to Blog
        </a>

        <article class="article-content">

            <header class="article-header">

                <span class="blog-date">
                    {{ $post->published_at->format('F d, Y') }}
                </span>

                <h1>{{ $post->title }}</h1>

                @if($post->excerpt)
                    <p class="article-excerpt">
                        {{ $post->excerpt }}
                    </p>
                @endif

            </header>

            @if($post->featured_image)
                <img
                    src="{{ asset('storage/' . $post->featured_image) }}"
                    alt="{{ $post->title }}"
                    class="article-featured-image"
                >
            @endif

            <div class="article-body">
                {!! $post->content !!}
            </div>

        </article>

    </div>
</section>

@endsection
