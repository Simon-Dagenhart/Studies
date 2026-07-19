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

    // Language toggle (English/Arabic). Every translatable element carries
    // a data-ar="..." attribute holding its Arabic text right next to the
    // English text already in the HTML — applyLang() swaps between them
    // and caches the original English on first switch so it can restore it.
    // Elements with nested tags (e.g. a paragraph with a link inside) use
    // data-ar-html instead, which swaps innerHTML rather than textContent
    // so the nested markup survives the translation.
    var langToggle = document.getElementById('langToggle');
    if (langToggle) {
        var applyLang = function (lang) {
            document.documentElement.lang = lang === 'ar' ? 'ar' : 'en';
            document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';
            document.querySelectorAll('[data-ar]').forEach(function (el) {
                if (el.dataset.en === undefined) el.dataset.en = el.textContent;
                el.textContent = lang === 'ar' ? el.dataset.ar : el.dataset.en;
            });
            document.querySelectorAll('[data-ar-html]').forEach(function (el) {
                if (el.dataset.enHtml === undefined) el.dataset.enHtml = el.innerHTML;
                el.innerHTML = lang === 'ar' ? el.dataset.arHtml : el.dataset.enHtml;
            });
            document.querySelectorAll('[data-ar-placeholder]').forEach(function (el) {
                if (el.dataset.enPlaceholder === undefined) el.dataset.enPlaceholder = el.getAttribute('placeholder') || '';
                el.setAttribute('placeholder', lang === 'ar' ? el.dataset.arPlaceholder : el.dataset.enPlaceholder);
            });
            document.querySelectorAll('[data-ar-label]').forEach(function (el) {
                if (el.dataset.enLabel === undefined) el.dataset.enLabel = el.getAttribute('label') || '';
                el.setAttribute('label', lang === 'ar' ? el.dataset.arLabel : el.dataset.enLabel);
            });
            langToggle.textContent = lang === 'ar' ? 'English' : 'العربية';
            localStorage.setItem('upistogo-lang', lang);
        };

        applyLang(localStorage.getItem('upistogo-lang') || 'en');

        langToggle.addEventListener('click', function () {
            var current = document.documentElement.lang === 'ar' ? 'ar' : 'en';
            applyLang(current === 'ar' ? 'en' : 'ar');
        });
    }
});
