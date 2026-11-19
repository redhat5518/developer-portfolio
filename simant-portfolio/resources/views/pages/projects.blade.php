
@extends('layouts.app')

@section('content')
<main class="projects-page container">

    <header class="projects-intro section">
        <p class="eyebrow">SELECTED WORK</p>
        <h1>Projects &amp; Integrations</h1>
        <p class="section-description">
            A selection of software products, backend development work,
            and third-party integrations I've contributed to throughout
            my professional experience.
        </p>
        <p class="projects-note">
            Project descriptions are shared for portfolio purposes.
            Screenshots, source code, and confidential implementation details
            are not publicly disclosed.
        </p>
    </header>

    {{-- PROFESSIONAL EXPERIENCE --}}
    <section class="section">
        <p class="eyebrow">01 — PROFESSIONAL EXPERIENCE</p>
        <h2>MobiProbe</h2>
        <p class="section-description">
            Software development and product engineering across web platforms,
            backend systems, dashboards, and integrations.
        </p>

        <div class="case-study-grid">

            <article class="case-study-card">
                <span class="case-study-type">Sports technology platform</span>
                <h3>AthleteMonitoring / Fitstats</h3>
                <p>
                    A sports performance monitoring platform that helps
                    organizations manage athlete wellness, injuries, training
                    feedback, and performance-related information.
                </p>
                <h4>My contributions</h4>
                <ul>
                    <li>Developed and maintained backend and frontend features.</li>
                    <li>Worked on athlete wellness, injury, Garmin, and RPE dashboards.</li>
                    <li>Contributed to API integrations and data synchronization.</li>
                    <li>Worked with database operations, testing, and ongoing improvements.</li>
                </ul>
                <div class="tech-tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>HTML</span>
                    <span>CSS</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Conversational technology</span>
                <h3>Commversion — SmartChat</h3>
                <p>
                    SmartChat is a human-led, AI-assisted chat solution designed
                    to turn website conversations into qualified enquiries.
                </p>
                <h4>My contributions</h4>
                <ul>
                    <li>Developed the administration panel for the SmartChat system.</li>
                    <li>Implemented automated retrieval of relevant details from chat conversations.</li>
                    <li>Built supporting workflows and mechanisms for different SmartChat use cases.</li>
                    <li>Worked with an existing AI service/API to support AI-assisted chat functionality.</li>
                </ul>
                <div class="tech-tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>AI Service Integration</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Digital platform</span>
                <h3>Design Shifu</h3>
                <p>
                    A design-focused digital platform built around collaboration,
                    creation, and a user experience shaped by the product's values.
                </p>
                <h4>My contributions</h4>
                <ul>
                    <li>Designed and developed the user dashboard and administration panel.</li>
                    <li>Implemented integrations with Asana, Slack, and Zapier.</li>
                    <li>Integrated Stripe payment functionality.</li>
                    <li>Worked on workflows for managing platform operations and connected services.</li>
                </ul>
                <div class="tech-tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>REST APIs</span>
                    <span>Stripe API</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Website monitoring</span>
                <h3>Sitestatus</h3>
                <p>
                    A website monitoring system that checks registered websites
                    at configured intervals and provides users with visibility
                    into website availability and monitoring logs.
                </p>
                <h4>My contributions</h4>
                <ul>
                    <li>Designed and developed the backend and frontend workflows.</li>
                    <li>Built functionality for users to register and manage website domains.</li>
                    <li>Implemented configurable monitoring intervals.</li>
                    <li>Used scheduled PHP scripts and cron jobs to run website availability checks.</li>
                    <li>Provided dashboard views for monitoring logs and website status.</li>
                </ul>
                <div class="tech-tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>Cron Jobs</span>
                </div>
            </article>

        </div>
    </section>

    {{-- AGENCY AND FREELANCE INTEGRATIONS --}}
    <section class="section">
        <p class="eyebrow">02 — AGENCY &amp; FREELANCE ENGAGEMENTS</p>
        <h2>API Integrations &amp; Automation</h2>
        <p class="section-description">
            Integration work connecting business platforms, automating
            operational workflows, and synchronizing data between services.
        </p>

        <div class="case-study-grid">

            <article class="case-study-card">
                <span class="case-study-type">Messaging integration</span>
                <h3>Slack App — Bots &amp; Slash Commands</h3>
                <p>
                    Worked on Slack app integrations involving bots and slash
                    commands to connect platform functionality with operational
                    workflows.
                </p>
                <div class="tech-tags">
                    <span>Slack API</span>
                    <span>Bots</span>
                    <span>Slash Commands</span>
                    <span>API Integration</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Workflow automation</span>
                <h3>Zapier App Connector</h3>
                <p>
                    Worked on a Zapier app connector implementing triggers and
                    actions to connect application events with automated
                    third-party workflows.
                </p>
                <div class="tech-tags">
                    <span>Zapier</span>
                    <span>Triggers</span>
                    <span>Actions</span>
                    <span>API Integration</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Project management automation</span>
                <h3>Asana API Automation</h3>
                <p>
                    Integrated Asana operations for Design Shifu, including
                    managing listings, adding messages and attachments, and
                    checking task or project statuses.
                </p>
                <div class="tech-tags">
                    <span>Asana API</span>
                    <span>REST APIs</span>
                    <span>Automation</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Education data integration</span>
                <h3>ClassLink — OneRoster &amp; OAuth</h3>
                <p>
                    Worked on ClassLink integration involving OneRoster data
                    exchange and OAuth-based authentication.
                </p>
                <div class="tech-tags">
                    <span>OneRoster</span>
                    <span>OAuth</span>
                    <span>API Integration</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Biometric data integration</span>
                <h3>InBody Biometric Data Sync</h3>
                <p>
                    Worked on synchronizing biometric data from InBody
                    services with an application through an integration workflow.
                </p>
                <div class="tech-tags">
                    <span>InBody</span>
                    <span>Data Synchronization</span>
                    <span>API Integration</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Payment integration</span>
                <h3>Stripe Payment Integration</h3>
                <p>
                    Integrated Stripe payment functionality to connect
                    application workflows with payment processing services.
                </p>
                <div class="tech-tags">
                    <span>Stripe API</span>
                    <span>Payments</span>
                    <span>API Integration</span>
                </div>
            </article>

            <article class="case-study-card">
                <span class="case-study-type">Backend integration</span>
                <h3>Custom Webhook Relays</h3>
                <p>
                    Worked on custom webhook relay integrations to pass
                    event data between connected applications and services.
                </p>
                <div class="tech-tags">
                    <span>Webhooks</span>
                    <span>REST APIs</span>
                    <span>Integrations</span>
                </div>
            </article>

        </div>
    </section>

    {{-- PERSONAL PORTFOLIO PROJECTS --}}
    <section class="section">
        <p class="eyebrow">03 — INDEPENDENT PORTFOLIO PROJECTS</p>
        <h2>What I'm Building</h2>
        <p class="section-description">
            Independent projects I'm developing to demonstrate practical
            skills in modern backend engineering, analytics, and AI applications.
        </p>

        <div class="case-study-grid">

            <article class="case-study-card personal-project">
                <span class="case-study-type">PHP / Laravel</span>
                <h3>BusinessFlow CRM</h3>
                <span class="project-status">In development</span>
                <p>
                    A CRM application for managing leads, customers, follow-ups,
                    activity history, and business workflows.
                </p>
                <div class="tech-tags">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                    <span>REST APIs</span>
                </div>
            </article>

            <article class="case-study-card personal-project">
                <span class="case-study-type">Python / Data Analytics</span>
                <h3>Business Intelligence Dashboard</h3>
                <span class="project-status">Planned</span>
                <p>
                    A data analytics application for uploading datasets,
                    cleaning data, exploring trends, and presenting business
                    KPIs through interactive dashboards.
                </p>
                <div class="tech-tags">
                    <span>Python</span>
                    <span>Pandas</span>
                    <span>NumPy</span>
                    <span>Streamlit</span>
                    <span>Plotly</span>
                </div>
            </article>

            <article class="case-study-card personal-project">
                <span class="case-study-type">Python / Machine Learning</span>
                <h3>AI Lead Intelligence</h3>
                <span class="project-status">Planned</span>
                <p>
                    A learning project exploring how machine learning can
                    estimate lead conversion likelihood, prioritize leads,
                    and expose predictions through a REST API.
                </p>
                <div class="tech-tags">
                    <span>Python</span>
                    <span>FastAPI</span>
                    <span>Scikit-learn</span>
                    <span>MySQL</span>
                    <span>Machine Learning</span>
                </div>
            </article>

        </div>
    </section>

</main>
@endsection
