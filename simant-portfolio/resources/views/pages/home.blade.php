
@extends('layouts.app')

@section('title', 'Simant Kumar | Full-Stack Software Engineer')

@section('content')

<section class="hero container">
    <div class="hero-content">
        <p class="eyebrow">SOFTWARE ENGINEER · INDIA</p>

        <h1>
            Building software<br>
            that solves <span>real problems.</span>
        </h1>

        <p class="hero-description">
            I'm {{ $profile['name'] }}, a {{ $profile['role'] }}
            focused on backend engineering, API integrations,
            data analytics and intelligent applications.
        </p>

        <div class="hero-actions">
            <a href="#projects" class="button button-primary">
                Explore my work
            </a>

            <a href="#contact" class="button button-secondary">
                Let's connect
            </a>
        </div>

        <p class="availability">
            <span class="status-dot"></span>
            Open to new opportunities
        </p>
    </div>

    <div class="hero-card">
        <div class="card-top">
            <span>DEVELOPER PROFILE</span>
            <span>01 / 04</span>
        </div>

        <div class="avatar">SK</div>

        <h2>{{ $profile['name'] }}</h2>
        <p>{{ $profile['role'] }}</p>

        <div class="profile-divider"></div>

        <div class="profile-stat">
            <span>Primary focus</span>
            <strong>Backend Engineering</strong>
        </div>

        <div class="profile-stat">
            <span>Technologies</span>
            <strong>PHP · Python · MySQL</strong>
        </div>

        <div class="profile-stat">
            <span>Location</span>
            <strong>{{ $profile['location'] }}</strong>
        </div>
    </div>
</section>

<section class="section container" id="about">
    <p class="eyebrow">01 — ABOUT ME</p>
    <h2>Engineering experience.<br><span>Continuous learning.</span></h2>

    <p class="section-description">
        I build and maintain web applications, backend services,
        database-driven systems and third-party integrations.
        My professional foundation is in PHP and full-stack
        development, while I'm expanding my work into Python,
        analytics and AI-powered applications.
    </p>
</section>

<section class="section container" id="skills">
    <p class="eyebrow">02 — TECHNOLOGY</p>
    <h2>Tools I work with</h2>

    <div class="skills-grid">
        @foreach ($skills as $skill)
            <span class="skill-item">{{ $skill }}</span>
        @endforeach
    </div>
</section>

<section class="section container" id="projects">
    <p class="eyebrow">03 — SELECTED WORK</p>
    <h2>Projects & experiments</h2>

    <p class="section-description">
        Practical projects demonstrating backend development,
        data analytics and AI application engineering.
        Project demonstrations will be added as they are built.
    </p>

    <div class="project-grid">
        <article class="project-card">
            <span>PHP · BACKEND</span>
            <h3>BusinessFlow CRM</h3>
            <p>Customer management, lead tracking and API integrations.</p>
            <span class="project-status">Planned project</span>
        </article>

        <article class="project-card">
            <span>PYTHON · ANALYTICS</span>
            <h3>Business Intelligence</h3>
            <p>Data cleaning, business KPIs and interactive dashboards.</p>
            <span class="project-status">Planned project</span>
        </article>

        <article class="project-card">
            <span>PYTHON · MACHINE LEARNING</span>
            <h3>AI Lead Intelligence</h3>
            <p>Lead scoring and conversion probability predictions.</p>
            <span class="project-status">Planned project</span>
        </article>
    </div>
</section>

<section class="section container" id="contact">
    <p class="eyebrow">04 — CONTACT</p>
    <h2>Have a project in mind?</h2>
    <p class="section-description">
        I'm interested in software engineering opportunities
        and building useful technology.
    </p>
    <a href="mailto:ksimant30@gmail.com" class="button button-primary">
        Email me
    </a>
</section>

@endsection
