
@extends('layouts.app')

@section('content')

<section class="section container">
    <p class="eyebrow">CONTACT</p>

    <h1>Let's Connect</h1>

    <p class="section-description">
        I'm open to discussing software engineering opportunities,
        collaborations, and interesting projects.
        Feel free to reach out.
    </p>

    <div class="contact-grid">

        <!-- Call Me -->
        <div class="contact-card">
            <div class="contact-icon">📞</div>

            <h3>Call Me</h3>

            <p>Prefer a direct conversation? Give me a call.</p>

            <a href="tel:+917017142198" class="button button-primary">
                Call Now
            </a>
        </div>

        <!-- Email Me -->
        <div class="contact-card">
            <div class="contact-icon">✉️</div>

            <h3>Email Me</h3>

            <p>Send me an email about opportunities or projects.</p>

            <a href="mailto:ksimant30@gmail.com"
               class="button button-primary">
                Send Email
            </a>
        </div>

    </div>
</section>

@endsection
