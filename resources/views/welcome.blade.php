<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ITST 302 - Client-Server Technologies</title>
        <meta name="description" content="Student homepage for Carl Matthew T. Castro">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <section class="hero">
            <div class="profile-panel">
                <div class="intro">
                    <p>Welcome! I’m</p>
                    <h1>
                        <span>{{ $student['first_name'] }}</span><br>
                        <span class="accent">{{ $student['last_name'] }}</span>
                    </h1>
                    <p class="role">Web Developer</p>
                    <p class="description">A foundational web application developed to master the basics of modern web development using the Laravel framework. This project demonstrates environment setup (PHP, Composer, MySQL, Git), understanding of the HTTP request lifecycle, and implementation of clean client-server architecture practices.</p>
                </div>
                <div class="buttons">
                    <a href="#details" class="button button-primary">View Details</a>
                    <a href="#contact" class="button button-secondary">Get In Touch</a>
                </div>
                <div class="details-card" id="details">
                    <x-detail-row label="Student Name" :value="$student['full_name']" />
                    <x-detail-row label="Student Number" :value="$student['number']" />
                    <x-detail-row label="Course" :value="$student['course']" />
                    <x-detail-row label="Section" :value="$student['section']" />
                    <x-detail-row label="Subject" :value="$student['subject']" />
                    <x-detail-row label="Current Date" :value="now()->format('m/d/Y')" />
                </div>
            </div>

            <div class="profile-image-panel">
                <div class="photo-wrap">
                    <img src="{{ asset('images/Profile.png') }}" alt="{{ $student['full_name'] }}">
                </div>
                <div class="social-links" id="contact">
                    <x-social-link href="https://www.linkedin.com" title="LinkedIn" aria-label="LinkedIn" target="_blank">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.85 6 2.47 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8.75h5V24H0V8.75zm7.5 0h4.8v2.1h.1c.67-1.27 2.3-2.6 4.75-2.6 5.08 0 6 3.34 6 7.68V24h-5V16.6c0-1.76 0-4.03-2.45-4.03-2.45 0-2.82 1.9-2.82 3.88V24h-5V8.75z"/></svg>
                    </x-social-link>
                    <x-social-link href="https://github.com" title="GitHub" aria-label="GitHub" target="_blank">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.78 8.21 11.37.6.11.82-.26.82-.58 0-.29-.01-1.05-.02-2.06-3.34.73-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.1-.75.08-.74.08-.74 1.22.09 1.86 1.25 1.86 1.25 1.08 1.86 2.84 1.32 3.53 1.01.11-.79.42-1.32.76-1.62-2.67-.31-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.31-.54-1.57.12-3.27 0 0 1.01-.32 3.3 1.23.95-.26 1.97-.39 2.98-.39 1.01 0 2.03.13 2.98.39 2.29-1.55 3.29-1.23 3.29-1.23.66 1.7.24 2.96.12 3.27.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.62-5.49 5.92.43.37.81 1.11.81 2.24 0 1.62-.01 2.92-.01 3.32 0 .32.21.7.82.58C20.56 21.78 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    </x-social-link>
                    <x-social-link href="https://x.com" title="Twitter" aria-label="Twitter" target="_blank">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 0 0 2.16-2.71 9.86 9.86 0 0 1-3.12 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15a4.92 4.92 0 0 0 1.52 6.57 4.9 4.9 0 0 1-2.23-.62v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42 9.86 9.86 0 0 1-6.11 2.1c-.4 0-.79-.02-1.18-.07a13.94 13.94 0 0 0 7.55 2.21c9.06 0 14.03-7.51 14.03-14.03 0-.21 0-.42-.02-.63A10.02 10.02 0 0 0 24 4.56z"/></svg>
                    </x-social-link>
                    <x-social-link href="mailto:student@example.com" title="Email" aria-label="Email" target="_self">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M2 4.5h20A2.5 2.5 0 0 1 24 7v10a2.5 2.5 0 0 1-2.5 2.5H2A2.5 2.5 0 0 1-.5 17V7A2.5 2.5 0 0 1 2 4.5zm0 2v.01L12 13 22 6.51V6.5H2zM22 17V8.69l-9.38 6.8a1 1 0 0 1-1.24 0L2 8.69V17h20z"/></svg>
                    </x-social-link>
                </div>
            </div>
        </section>
    </body>
</html>
