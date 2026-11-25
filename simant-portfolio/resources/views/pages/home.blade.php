
@extends('layouts.app')

@section('title', 'Simant Kumar | Full-Stack Software Engineer')

@section('content')

<section class="hero">
    <div class="hero-image">
        <img src="{{ asset('images/profile-photo.jpeg') }}"
            alt="Simant Kumar - Senior Software Engineer">
    </div>
    
    <div class="hero-content">
        <p class="hero-eyebrow">
            SENIOR SOFTWARE ENGINEER · BACKEND & AI INTEGRATIONS · INDIA
        </p>

        <h1>
            Engineering
            <span>enterprise backend systems</span>
            and AI-enabled applications.
        </h1>

        <p class="hero-description">
            I'm a Senior Software Engineer with 9+ years of experience
            in PHP, Python, backend engineering, REST APIs, and enterprise
            integrations. My experience spans SportsTech platforms,
            application modernization, data-driven solutions, and practical
            AI/ML technologies including LangChain, PyTorch, and RAG.
        </p>

        <div class="hero-actions">
            <a href="{{ route('home') }}#projects" class="btn-primary">
                Explore My Projects
            </a>

            <a href="{{ route('home') }}#contact" class="btn-secondary">
                Contact Me
            </a>

            <a href="{{ asset('files/simant-kumar-resume.pdf') }}"
            class="btn-secondary"
            download>
                Download Resume
            </a>
        </div>

        <div class="hero-highlights">
            <div>
                <strong>9+ Years</strong>
                <span>Software Engineering</span>
            </div>

            <div>
                <strong>PHP & Python</strong>
                <span>Backend Engineering</span>
            </div>

            <div>
                <strong>AI & ML</strong>
                <span>Intelligent Applications</span>
            </div>
        </div>
    </div>

</section>

<section class="experience-section" id="experience">
    <div class="section-heading">
        <p class="section-eyebrow">MY CAREER</p>
        <h2>Professional Experience</h2>
        <p>
            My professional journey in software development,
            backend engineering, and application integration.
        </p>
    </div>

    <div class="experience-timeline">

        <div class="experience-card">
            <div class="experience-date">
                October 2019 – Present
            </div>

            
            <div class="experience-content">
                <h3>Senior Software Engineer</h3>
                <h4>MobiProbe</h4>

                <p>
                    Working on enterprise application performance monitoring solutions,
                    backend engineering, SportsTech platforms, AI enablement, database
                    operations, and third-party integrations. Contributing to application
                    modernization, technical research, and development of data-driven solutions.
                </p>

                <h4>Backend Engineering &amp; Enterprise Applications</h4>
                <ul>
                    <li>
                        Develop and enhance enterprise web applications using PHP and Python,
                        including Flask-based backend components, business logic, and
                        data processing workflows.
                    </li>
                    <li>
                        Design, develop, and integrate RESTful APIs, webhooks, and third-party
                        services using HTTP, JSON, XML, and OAuth 2.0.
                    </li>
                    <li>
                        Work with MySQL databases, data modeling, query optimization,
                        database operations, and backend performance troubleshooting.
                    </li>
                    <li>
                        Develop frontend functionality using JavaScript, jQuery,
                        HTML5, CSS3, and Bootstrap.
                    </li>
                </ul>

                <h4>AI Enablement, Machine Learning &amp; Data Science</h4>
                <ul>
                    <li>
                        Gain practical experience with LangChain, PyTorch, and Pandas
                        through AI/ML development and technical exploration.
                    </li>
                    <li>
                        Collaborate on Retrieval-Augmented Generation (RAG) and
                        embedding-based architecture for AthleteMonitoring, exploring
                        intelligent data retrieval and AI-powered application capabilities.
                    </li>
                    <li>
                        Contribute to pretrained deep learning model fine-tuning using
                        PyTorch for an experimental crop disease image classification initiative.
                    </li>
                    <li>
                        Contribute to computer vision ideation, image annotation,
                        and dataset preparation for machine learning workflows.
                    </li>
                </ul>

                <h4>SportsTech &amp; Data Visualization</h4>
                <ul>
                    <li>
                        Contribute to AthleteMonitoring, an enterprise SportsTech platform
                        focused on athlete performance analytics, wellness monitoring,
                        injury management, and reporting.
                    </li>
                    <li>
                        Develop complex interactive Highcharts dashboards and data
                        visualizations for performance analytics and stakeholder reporting.
                    </li>
                    <li>
                        Work on backend functionality supporting athlete data processing,
                        performance tracking, and wellness workflows.
                    </li>
                </ul>

                <h4>API Integrations &amp; Payment Systems</h4>
                <ul>
                    <li>
                        Implement third-party integrations using REST APIs, HTTP requests,
                        JSON, webhooks, and authentication mechanisms.
                    </li>
                    <li>
                        Personally implement Twilio integration for communication-related functionality.
                    </li>
                    <li>
                        Integrate external platforms including Slack, Zapier, Asana, and ClassLink.
                    </li>
                    <li>
                        Work on Stripe payment gateway integration and subscription management workflows.
                    </li>
                </ul>

                <h4>Legacy Modernization &amp; Application Security</h4>
                <ul>
                    <li>
                        Contribute to the AthleteMonitoring UI revamp and modernization
                        of legacy application components.
                    </li>
                    <li>
                        Migrate and upgrade outdated libraries, dependencies, packages,
                        and framework components to improve compatibility, maintainability,
                        and security.
                    </li>
                    <li>
                        Participate in technical research, application troubleshooting,
                        code reviews, and engineering improvements to address complex
                        technical challenges.
                    </li>
                </ul>

                <div class="experience-tags">
                    <span>PHP</span>
                    <span>Python</span>
                    <span>Flask</span>
                    <span>MySQL</span>
                    <span>REST APIs</span>
                    <span>LangChain</span>
                    <span>PyTorch</span>
                    <span>Pandas</span>
                    <span>RAG</span>
                    <span>Embeddings</span>
                    <span>Computer Vision</span>
                    <span>Machine Learning</span>
                    <span>SportsTech</span>
                    <span>Highcharts</span>
                    <span>Twilio</span>
                    <span>Stripe</span>
                    <span>OAuth 2.0</span>
                    <span>Webhooks</span>
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>Bootstrap</span>
                    <span>Legacy Modernization</span>
                </div>
            </div>
            </div>

        </div>

        <div class="experience-card">
            <div class="experience-date">
                2017 – 2019
            </div>

            <div class="experience-content">
                <h3>Junior Web Developer</h3>
                <h4>Earlier Professional Experience</h4>

                <p>
                    Started my software development career working
                    on small web development assignments and projects.
                </p>

                <ul>
                    <li>Worked with PHP and Python fundamentals.</li>
                    <li>Developed web pages using HTML and CSS.</li>
                    <li>Worked with JavaScript for frontend functionality.</li>
                </ul>

                <div class="experience-tags">
                    <span>PHP</span>
                    <span>Python</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="skills-section" id="skills">
    <div class="section-heading">
        <p class="section-eyebrow">MY EXPERTISE</p>
        <h2>Technical Skills</h2>
        <p>
            Technologies and tools I use for building,
            integrating, and improving software applications.
        </p>
    </div>

    <div class="skills-grid">

        <div class="skill-card">
            <div class="skill-icon">⌨️</div>
            <h3>Backend Development</h3>
            <p>
                PHP, Laravel, Python, REST APIs,
                API integrations, Webhooks
            </p>
            <span class="skill-level">Core expertise: PHP</span>
        </div>

        <div class="skill-card">
            <div class="skill-icon">🗄️</div>
            <h3>Database Management</h3>
            <p>
                MySQL, SQLite, MongoDB,
                SQL queries, Data Modeling
            </p>
            <span class="skill-level">Professional experience</span>
        </div>

        <div class="skill-card">
            <div class="skill-icon">🌐</div>
            <h3>Frontend Development</h3>
            <p>
                HTML5, CSS3, JavaScript,
                jQuery, Bootstrap
            </p>
            <span class="skill-level">Professional experience</span>
        </div>

        <div class="skill-card">
            <div class="skill-icon">🔗</div>
            <h3>Integrations & Communication</h3>
            <p>
                REST APIs, JSON, XML,
                cURL, Postman, WebSocket, XMPP
            </p>
            <span class="skill-level">Professional experience</span>
        </div>

        <div class="skill-card">
            <div class="skill-icon">📊</div>
            <h3>Data Analytics</h3>
            <p>
                Python, Pandas, NumPy,
                Data Processing, Visualization
            </p>
            <span class="skill-level">Developing expertise</span>
        </div>

        <div class="skill-card">
            <div class="skill-icon">🤖</div>
            <h3>AI & Machine Learning</h3>
            <p>
                Machine Learning fundamentals,
                AI applications, AIML, Chatbots
            </p>
            <span class="skill-level">Learning & project development</span>
        </div>

    </div>
</section>

<section class="about-section" id="about">
    <div class="about-content">
        <div class="about-label">
            <p class="section-eyebrow">ABOUT ME</p>
            <h2>Engineering solutions with practical experience and curiosity.</h2>
        </div>

        
        <div class="about-description">
            <p>
                I'm a Senior Software Engineer with 9+ years of experience
                in enterprise application development, backend engineering,
                API integrations, and data-driven platforms. I specialize
                in building reliable backend systems, integrating external
                services, and solving complex engineering challenges.
            </p>

            <p>
                My core technical expertise includes PHP, Python, Flask,
                MySQL, RESTful APIs, and modern web technologies. I've
                worked on enterprise applications, SportsTech solutions,
                payment gateway integrations, subscription management,
                and complex data visualization dashboards using Highcharts.
            </p>

            <p>
                I also have practical experience with AI/ML technologies
                including LangChain, PyTorch, and Pandas. My exposure
                includes collaborating on Retrieval-Augmented Generation
                (RAG) and embedding-based architecture, model fine-tuning,
                computer vision initiatives, and image annotation workflows.
            </p>

            <p>
                Beyond application development, I've contributed to legacy
                system modernization, dependency and framework upgrades,
                application security improvements, and third-party
                integrations involving Twilio, Stripe, Slack, Zapier,
                and other platforms.
            </p>

            <p>
                I'm particularly interested in building enterprise-grade
                backend systems and intelligent applications that combine
                APIs, data processing, automation, and AI capabilities.
            </p>

            <div class="about-details">
                <div>
                    <strong>Education</strong>
                    <span>B.Tech – Information Technology</span>
                </div>

                <div>
                    <strong>Location</strong>
                    <span>India</span>
                </div>

                <div>
                    <strong>Primary Expertise</strong>
                    <span>PHP, Python & Backend Engineering</span>
                </div>

                <div>
                    <strong>Specialization</strong>
                    <span>Enterprise Applications & API Integrations</span>
                </div>

                <div>
                    <strong>AI/ML Technologies</strong>
                    <span>LangChain, PyTorch, Pandas, RAG & Embeddings</span>
                </div>

                <div>
                    <strong>Industry Experience</strong>
                    <span>SportsTech & Enterprise Software</span>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="btn-primary">
                Let's Connect
            </a>
        </div>

    </div>
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

    <h2>Projects & Integrations</h2>

    <p class="section-description">
        A selection of software products, backend development work,
        and third-party integrations I've contributed to.
    </p>

    <a href="{{ route('projects') }}" class="button button-primary">
        Explore All Projects
    </a>
</section>

<section class="section container" id="contact">
    <p class="eyebrow">04 — CONTACT</p>

    <h2>Have a project in mind?</h2>

    <p class="section-description">
        I'm interested in software engineering opportunities
        and building useful technology.
    </p>

    <a href="{{ route('contact') }}" class="button button-primary">
        Get in Touch
    </a>
</section>
@endsection
