@extends('layouts.app')

@section('title', 'About | Simant Kumar')

@section('content')
<section class="section container page-content">
    <p class="eyebrow">ABOUT ME</p>
    <h1>Engineering experience.<br><span>Continuous learning.</span></h1>

    <p class="section-description">
        I'm a software engineer with professional experience in
        backend and full-stack web development, PHP, MySQL,
        REST APIs and third-party integrations.

        I'm expanding my practical skills in Python, data analytics
        and AI-powered applications.
    </p>

    <a href="{{ route('home') }}" class="button button-primary">
        Back to home
    </a>
</section>
@endsection
