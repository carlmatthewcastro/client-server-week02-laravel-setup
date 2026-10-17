<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello Laravel | Carl Matthew T. Castro</title>
        <meta name="description" content="Carl Matthew T. Castro's student portfolio and Hello Laravel project for ITST 302.">
        <link rel="icon" type="image/svg+xml" href="{{ asset('images/cc-monogram.svg') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <a class="skip-link" href="#main-content">Skip to content</a>
        <header class="site-header">
            <div class="container header-inner">
                <a class="brand" href="#home">
                    <img class="brand-mark" src="{{ asset('images/cc-monogram.svg') }}" alt="" width="36" height="45">
                    <span class="brand-wordmark">CARL CASTRO<small>STUDENT DEVELOPER</small>
                    </span>
                </a>
                <nav aria-label="Main navigation">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#project">Project</a>
                    <a class="nav-contact" href="#contact">Let’s connect</a>
                </nav>
            </div>
        </header>
        <main id="main-content">
            <section class="hero container" id="home" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow">STUDENT DEVELOPER · BSIT 3D</p>
                    <h1 id="hero-title">Carl Matthew<br>
                        <span class="accent">T. Castro</span>
                    </h1>
                    <p class="hero-intro">Information Technology student & aspiring web developer</p>
                    <p class="description">An Information Technology student exploring the web, one project at a time. Welcome to my first step into Laravel and client-server development.</p>
                    <div class="buttons">
                        <a href="#project" class="button button-primary">Explore my project</a>
                        <a href="#about" class="button button-secondary">Meet the developer</a>
                    </div>
                    <p class="hero-note">Learning by doing. Built with Laravel.</p>
                </div>
                <figure class="portrait">
                    <img src="{{ asset('images/Profile.png') }}" alt="Portrait of {{ $student['full_name'] }}" fetchpriority="high">
                    <figcaption>
                        <strong>{{ $student['full_name'] }}</strong>
                        <small>Aspiring Web Developer</small>
                    </figcaption>
                </figure>
            </section>
            <div class="stack-strip">
                <div class="container stack-inner">
                    <p>THE TOOLS BEHIND THE PROJECT</p>
                    <ul aria-label="Development tools">
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>Composer</li>
                        <li>MySQL</li>
                        <li>Git</li>
                        <li>VS Code</li>
                    </ul>
                </div>
            </div>
            <section class="section container" id="about" aria-labelledby="about-title">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow">01 / THE DEVELOPER</p>
                        <h2 id="about-title">A little about me</h2>
                    </div>
                    <p>My background, studies, and current focus in web development.</p>
                </div>
                <div class="about-layout">
                    <article class="about-copy">
                        <span class="mini-label">INFORMATION TECHNOLOGY STUDENT</span>
                        <h3>Learning how the web works, from request to response.</h3>
                        <p>I’m {{ $student['first_name'] }}, a BSIT student in Section {{ $student['section'] }}. I’m learning to turn classroom lessons into working Laravel applications.</p>
                        <p>For ITST 302, I’m exploring routing, controllers, and Blade views while developing good habits in Git and project documentation.</p>
                        <div class="study-focus">
                            <p>Currently exploring</p>
                            <ul aria-label="Current learning focus">
                                <li>Laravel & PHP</li>
                                <li>Client-server development</li>
                                <li>Git workflow</li>
                            </ul>
                        </div>
                        <a class="text-link" href="#project">See what I’m working on</a>
                    </article>
                    <section class="student-panel" aria-labelledby="student-panel-title">
                        <div class="student-panel-heading">
                            <div>
                                <p class="mini-label">ACADEMIC PROFILE</p>
                                <h3 id="student-panel-title">Student information</h3>
                            </div>
                            <span class="section-badge">BSIT {{ $student['section'] }}</span>
                        </div>
                        <dl class="details-grid">
                            <x-detail-row label="Student Name" :value="$student['full_name']" />
                            <x-detail-row label="Student Number" :value="$student['number']" />
                            <x-detail-row label="Course" :value="$student['course']" />
                            <x-detail-row label="Section" :value="$student['section']" />
                            <x-detail-row label="Subject" :value="$student['subject']" />
                            <x-detail-row label="Current Date (Asia/Manila)" :value="$student['date']" />
                        </dl>
                    </section>
                </div>
            </section>
            <section class="project-section" id="project" aria-labelledby="project-title">
                <div class="section container">
                    <div class="section-heading">
                        <div>
                            <p class="eyebrow">02 / FEATURED PROJECT</p>
                            <h2 id="project-title">Where the journey begins
                            </h2>
                        </div>
                        <span class="project-number">MP / 01</span>
                    </div>
                    <article class="project-card">
                        <div class="project-visual">
                            <div class="window-bar">
                                <i>
                                </i>
                                <i>
                                </i>
                                <i>
                                </i>
                                <span>hello-laravel / request lifecycle</span>
                            </div>
                            <div class="code-display">
                                <span class="code-comment">// A request. A route. A response.</span>
                                <p>
                                    <span class="code-pink">Route</span>::get(<span class="code-green">'/'</span>,<br>&nbsp;[PortfolioController::class,<br>&nbsp;<span class="code-green">'index'</span>]);</p>
                                <div class="request-flow" aria-label="Browser request to Laravel server to Blade response">
                                    <span>Browser</span>
                                    <span>Laravel</span>
                                    <span>Blade view</span>
                                </div>
                            </div>
                        </div>
                        <div class="project-copy">
                            <p class="eyebrow">ITST 302 · WEEK 2</p>
                            <h3>Hello Laravel</h3>
                            <p class="welcome-message">Hello Laravel! Welcome to Client-Server Technologies.</p>
                            <p>A professional development environment setup and my first Laravel application. This project connects the essentials: routing, controllers, Blade views, and version control.</p>
                            <ul class="tags" aria-label="Project technologies">
                                <li>Laravel 12</li>
                                <li>PHP 8</li>
                                <li>Blade</li>
                                <li>Vite</li>
                            </ul>
                            <a class="text-link" href="https://github.com/carlmatthewcastro/client-server-week02-laravel-setup-" target="_blank" rel="noopener noreferrer">View source & documentation</a>
                        </div>
                    </article>
                    <div class="learning-grid">
                        <article>
                            <span>01</span>
                            <h3>Environment setup</h3>
                            <p>Configure PHP, Composer, and the tools needed to run a Laravel application locally.</p>
                        </article>
                        <article>
                            <span>02</span>
                            <h3>Client meets server</h3>
                            <p>Follow an HTTP request through a route and controller to a rendered Blade view.</p>
                        </article>
                        <article>
                            <span>03</span>
                            <h3>Build with good habits</h3>
                            <p>Organize reusable components, document the process, and track changes with Git.</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="contact-section container" id="contact" aria-labelledby="contact-title">
                <div>
                    <p class="eyebrow">03 / KEEP IN TOUCH</p>
                    <h2 id="contact-title">Let’s keep building
                    </h2>
                    <p>Follow my projects and see what I learn next.</p>
                </div>
                <a href="https://github.com/carlmatthewcastro" class="button button-primary" target="_blank" rel="noopener noreferrer">Find me on GitHub</a>
            </section>
        </main>
        <footer class="site-footer">
            <div class="container footer-inner">
                <p>© {{ now('Asia/Manila')->year }} {{ $student['full_name'] }}</p>
                <p>Made with Laravel · ITST 302</p>
                <a href="#home">Back to top</a>
            </div>
        </footer>
    </body>
</html>
