document.addEventListener('DOMContentLoaded', function () {
    var navToggle = document.getElementById('navToggle');
    var navList = document.getElementById('navList');
    if (navToggle && navList) {
        navToggle.addEventListener('click', function () {
            navList.classList.toggle('open');
        });
    }

    var yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    var themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
        var setIcon = function (theme) {
            themeToggle.textContent = theme === 'dark' ? '☀️' : '🌙';
        };
        setIcon(document.documentElement.getAttribute('data-theme') || 'light');

        themeToggle.addEventListener('click', function () {
            var current = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            var next = current === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', next);
            localStorage.setItem('upistogo-theme', next);
            setIcon(next);
        });
    }
});
