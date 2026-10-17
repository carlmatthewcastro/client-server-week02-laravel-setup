import './bootstrap';

const motionPreference = window.matchMedia('(prefers-reduced-motion: reduce)');
const animatedElements = document.querySelectorAll(
    '.hero-copy, .portrait, .stack-inner, .section-heading, .about-copy, ' +
    '.student-panel, .project-card, .learning-grid article, .contact-section, .footer-inner',
);

// Keep content visible without JavaScript or when reduced motion is preferred.
if ('IntersectionObserver' in window && !motionPreference.matches) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.08 });

    animatedElements.forEach((element) => {
        element.classList.add('reveal');
        observer.observe(element);
    });

    motionPreference.addEventListener('change', (event) => {
        if (!event.matches) return;

        observer.disconnect();
        animatedElements.forEach((element) => element.classList.remove('reveal'));
    });
}
