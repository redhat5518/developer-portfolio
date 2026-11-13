@extends('layouts.app')

@section('title', 'Projects | Simant Kumar')

@section('content')
<section class="section container page-content">
    <p class="eyebrow">MY WORK</p>
    <h1>Projects & experiments</h1>

    <p class="section-description">
        A collection of practical applications demonstrating
        my software engineering and problem-solving skills.
    </p>

    <div class="project-grid">
        <article class="project-card">
            <span>PHP · LARAVEL</span>
            <h3>BusinessFlow CRM</h3>
            <p>Lead management, customer workflows and API integrations.</p>
            <span class="project-status">In development</span>
        </article>

        <article class="project-card">
            <span>PYTHON · ANALYTICS</span>
            <h3>Business Intelligence</h3>
            <p>Data processing, business KPIs and interactive reporting.</p>
            <span class="project-status">Planned</span>
        </article>

        <article class="project-card">
            <span>PYTHON · ML</span>
            <h3>AI Lead Intelligence</h3>
            <p>Lead scoring and conversion prediction.</p>
            <span class="project-status">Planned</span>
        </article>
    </div>
</section>
@endsection
