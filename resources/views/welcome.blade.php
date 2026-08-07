<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ITST 302 - Client-Server Technologies</title>
        <meta name="description" content="Student homepage for Carl Matthew T. Castro">

        <style>
            :root {
                color-scheme: dark;
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                background: #060607;
                color: #f8fafc;
            }
            * { box-sizing: border-box; }
            body {
                margin: 0;
                min-height: 100vh;
                background: radial-gradient(circle at top left, rgba(248, 113, 113, 0.14), transparent 22%),
                            radial-gradient(circle at bottom right, rgba(248, 113, 113, 0.08), transparent 30%),
                            #060607;
                color: #f8fafc;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 24px;
            }
            .hero {
                width: 100%;
                max-width: 1100px;
                display: grid;
                grid-template-columns: 1.05fr 0.95fr;
                gap: 32px;
                align-items: center;
            }
            .profile-panel {
                padding: 40px;
                border-radius: 36px;
                background: rgba(15, 23, 42, 0.93);
                border: 1px solid rgba(255,255,255,0.08);
                box-shadow: 0 40px 100px rgba(0,0,0,0.35);
            }
            .intro {
                margin-bottom: 32px;
            }
            .intro p {
                margin: 0;
                text-transform: uppercase;
                letter-spacing: 0.35em;
                color: #fda4af;
                font-size: 0.85rem;
            }
            .intro h1 {
                margin: 18px 0 0;
                font-size: clamp(3rem, 5vw, 4.5rem);
                line-height: 0.95;
                letter-spacing: -0.05em;
            }
            .intro h1 .accent {
                color: #fb7185;
            }
            .intro .role {
                margin: 20px 0 0;
                font-size: 1.1rem;
                color: #f8fafc;
                font-weight: 600;
            }
            .intro .description {
                margin: 24px 0 0;
                color: #cbd5e1;
                line-height: 1.9;
                max-width: 620px;
            }
            .buttons {
                margin-top: 34px;
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
            }
            .button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 16px 28px;
                border-radius: 9999px;
                border: none;
                font-size: 0.95rem;
                font-weight: 700;
                cursor: pointer;
                text-decoration: none;
            }
            .button-primary {
                background: #fb7185;
                color: #ffffff;
                box-shadow: 0 18px 40px rgba(251,113,133,0.25);
            }
            .button-secondary {
                background: rgba(255,255,255,0.08);
                color: #f8fafc;
                border: 1px solid rgba(255,255,255,0.14);
            }
            .details-card {
                margin-top: 48px;
                display: grid;
                gap: 18px;
            }
            .detail-row {
                display: grid;
                grid-template-columns: 1fr auto;
                gap: 12px;
                align-items: center;
                padding: 18px 20px;
                border-radius: 24px;
                background: rgba(255,255,255,0.04);
                border: 1px solid rgba(255,255,255,0.07);
            }
            .detail-label {
                color: #94a3b8;
                text-transform: uppercase;
                letter-spacing: 0.25em;
                font-size: 0.72rem;
            }
            .detail-value {
                color: #f8fafc;
                font-size: 1rem;
                font-weight: 600;
            }
            .profile-image-panel {
                display: flex;
                flex-direction: column;
                gap: 24px;
                justify-content: center;
                align-items: center;
            }
            .photo-wrap {
                position: relative;
                width: min(520px, 100%);
                aspect-ratio: 4 / 3;
                border-radius: 32px;
                overflow: hidden;
                border: 5px solid #ffffff;
                box-shadow: 0 0 120px rgba(251,113,133,0.25);
            }
            .photo-wrap img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }
            .social-links {
                width: 100%;
                display: flex;
                justify-content: center;
                gap: 16px;
                flex-wrap: wrap;
            }
            .social-links a {
                width: 56px;
                height: 56px;
                display: grid;
                place-items: center;
                border-radius: 18px;
                background: rgba(255,255,255,0.08);
                border: 1px solid rgba(255,255,255,0.1);
                color: #f8fafc;
                text-decoration: none;
            }
            .social-links a:hover {
                background: rgba(251,113,133,0.18);
            }
            .social-links svg {
                width: 22px;
                height: 22px;
                fill: currentColor;
            }
            @media (max-width: 980px) {
                .hero { grid-template-columns: 1fr; }
                .profile-panel { padding: 28px; }
            }
            @media (max-width: 620px) {
                body { padding: 16px; }
                .intro h1 { font-size: 2.8rem; }
                .buttons { flex-direction: column; align-items: stretch; }
                .button { width: 100%; }
                .social-links { gap: 12px; }
            }
        </style>
    </head>
    <body>
        <section class="hero">
            <div class="profile-panel">
                <div class="intro">
                    <p>Welcome! I’m</p>
                    <h1>
                        <span>Carl Matthew</span><br>
                        <span class="accent">T. Castro</span>
                    </h1>
                    <p class="role">Web Developer</p>
                    <p class="description">I create clean, engaging websites that help brands tell their story and grow online. This homepage is styled with a bold dark theme and includes your student profile details.</p>
                </div>
                <div class="buttons">
                    <a href="#details" class="button button-primary">View Details</a>
                    <a href="#contact" class="button button-secondary">Get In Touch</a>
                </div>
                <div class="details-card" id="details">
                    <div class="detail-row">
                        <div>
                            <div class="detail-label">Student Name</div>
                            <div class="detail-value">Carl Matthew T. Castro</div>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div>
                            <div class="detail-label">Student Number</div>
                            <div class="detail-value">0123-0616</div>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div>
                            <div class="detail-label">Course</div>
                            <div class="detail-value">Bachelor of Science in Information Technology</div>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div>
                            <div class="detail-label">Section</div>
                            <div class="detail-value">3D</div>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div>
                            <div class="detail-label">Subject</div>
                            <div class="detail-value">ITST 302 - Client-Server Technologies</div>
                        </div>
                    </div>
                    <div class="detail-row">
                        <div>
                            <div class="detail-label">Current Date</div>
                            <div class="detail-value">08/07/2026</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-image-panel">
                <div class="photo-wrap">
                    <img src="{{ asset('images/Profile.png') }}" alt="Carl Matthew T. Castro">
                </div>
                <div class="social-links" id="contact">
                    <a href="#" title="LinkedIn" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.85 6 2.47 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8.75h5V24H0V8.75zm7.5 0h4.8v2.1h.1c.67-1.27 2.3-2.6 4.75-2.6 5.08 0 6 3.34 6 7.68V24h-5V16.6c0-1.76 0-4.03-2.45-4.03-2.45 0-2.82 1.9-2.82 3.88V24h-5V8.75z"/></svg>
                    </a>
                    <a href="#" title="GitHub" aria-label="GitHub">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.78 8.21 11.37.6.11.82-.26.82-.58 0-.29-.01-1.05-.02-2.06-3.34.73-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.1-.75.08-.74.08-.74 1.22.09 1.86 1.25 1.86 1.25 1.08 1.86 2.84 1.32 3.53 1.01.11-.79.42-1.32.76-1.62-2.67-.31-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.31-.54-1.57.12-3.27 0 0 1.01-.32 3.3 1.23.95-.26 1.97-.39 2.98-.39 1.01 0 2.03.13 2.98.39 2.29-1.55 3.29-1.23 3.29-1.23.66 1.7.24 2.96.12 3.27.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.62-5.49 5.92.43.37.81 1.11.81 2.24 0 1.62-.01 2.92-.01 3.32 0 .32.21.7.82.58C20.56 21.78 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                    <a href="#" title="Twitter" aria-label="Twitter">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M24 4.56c-.89.39-1.84.65-2.84.77a4.92 4.92 0 0 0 2.16-2.71 9.86 9.86 0 0 1-3.12 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15a4.92 4.92 0 0 0 1.52 6.57 4.9 4.9 0 0 1-2.23-.62v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42 9.86 9.86 0 0 1-6.11 2.1c-.4 0-.79-.02-1.18-.07a13.94 13.94 0 0 0 7.55 2.21c9.06 0 14.03-7.51 14.03-14.03 0-.21 0-.42-.02-.63A10.02 10.02 0 0 0 24 4.56z"/></svg>
                    </a>
                    <a href="#" title="Email" aria-label="Email">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M2 4.5h20A2.5 2.5 0 0 1 24 7v10a2.5 2.5 0 0 1-2.5 2.5H2A2.5 2.5 0 0 1-.5 17V7A2.5 2.5 0 0 1 2 4.5zm0 2v.01L12 13 22 6.51V6.5H2zM22 17V8.69l-9.38 6.8a1 1 0 0 1-1.24 0L2 8.69V17h20z"/></svg>
                    </a>
                </div>
            </div>
        </section>
    </body>
</html>
