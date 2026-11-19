
@extends('layouts.app')

@section('title', 'Simant Kumar | Full-Stack Software Engineer')

@section('content')

<section class="hero">
    <div class="hero-content">
        <p class="hero-eyebrow">SOFTWARE ENGINEER · INDIA</p>

        <h1>
            Building reliable
            <span>backend solutions</span>
            and intelligent applications.
        </h1>

        <p class="hero-description">
            I'm a Senior Software Engineer with professional experience
            in PHP, MySQL, REST APIs, integrations, and full-stack
            web development. Currently expanding my expertise in
            Python, data analytics, and AI applications.
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
                <strong>PHP</strong>
                <span>Backend Development</span>
            </div>

            <div>
                <strong>MySQL</strong>
                <span>Database Management</span>
            </div>

            <div>
                <strong>Python</strong>
                <span>Growing Expertise</span>
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
                    Working on web-based application performance
                    monitoring solutions, backend development,
                    database operations, and third-party integrations.
                </p>

                <ul>
                    <li>
                        Develop and maintain backend applications
                        using PHP and Python.
                    </li>
                    <li>
                        Build and integrate REST APIs and
                        third-party services.
                    </li>
                    <li>
                        Work with MySQL databases, queries,
                        data models, and application optimization.
                    </li>
                    <li>
                        Develop frontend functionality using
                        JavaScript, jQuery, HTML, and CSS.
                    </li>
                    <li>
                        Participate in research and development
                        to solve technical challenges and explore
                        new technologies.
                    </li>
                </ul>

                <div class="experience-tags">
                    <span>PHP</span>
                    <span>Python</span>
                    <span>MySQL</span>
                    <span>REST APIs</span>
                    <span>JavaScript</span>
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
                I'm a Software Engineer with professional experience
                in developing and maintaining web applications,
                backend systems, database-driven solutions, and
                third-party integrations.
            </p>

            <p>
                Since starting my professional journey, I've worked
                extensively with PHP, MySQL, JavaScript, and web
                technologies, contributing to application development,
                troubleshooting, optimization, and technical research.
            </p>

            <p>
                I'm currently expanding my skills in Python,
                data analytics, and AI application development,
                with a focus on building practical projects that
                solve real-world business problems.
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
                    <span>PHP Backend & Full-Stack Development</span>
                </div>

                <div>
                    <strong>Career Focus</strong>
                    <span>Backend Engineering & AI Applications</span>
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
+9*
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
