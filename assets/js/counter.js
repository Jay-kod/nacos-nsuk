document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-card h2');
    const speed = 200; // The lower the slower

    const animateCounter = (counter) => {
        const target = +counter.innerText.replace(/[^0-9]/g, '');
        counter.innerText = '0'; // Start counting from 0

        const increment = target / speed;

        const updateCount = () => {
            const current = +counter.innerText.replace(/[^0-9]/g, '');

            if (current < target) {
                counter.innerText = Math.ceil(current + increment).toLocaleString();
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target.toLocaleString() + '+';
            }
        };

        updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});
