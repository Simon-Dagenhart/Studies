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
});
