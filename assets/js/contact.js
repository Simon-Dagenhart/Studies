(function () {
    var form = document.getElementById('contactForm');
    if (!form) return;

    var successAlert = document.getElementById('successAlert');
    var errorAlert = document.getElementById('errorAlert');
    var courseSelect = document.getElementById('course');

    // Pre-select the course of interest when arriving from a course's "Enquire" link.
    var params = new URLSearchParams(window.location.search);
    var courseParam = params.get('course');
    if (courseParam && courseSelect.querySelector('option[value="' + CSS.escape(courseParam) + '"]')) {
        courseSelect.value = courseParam;
    }

    function isValidEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var name = form.name.value.trim();
        var email = form.email.value.trim();
        var message = form.message.value.trim();
        var errors = [];

        if (name === '') errors.push('Name is required.');
        if (email === '' || !isValidEmail(email)) errors.push('A valid email is required.');
        if (message === '') errors.push('Please include a short message.');

        errorAlert.innerHTML = '';
        successAlert.hidden = true;

        if (errors.length) {
            errors.forEach(function (err) {
                var li = document.createElement('li');
                li.textContent = err;
                errorAlert.appendChild(li);
            });
            errorAlert.hidden = false;
            return;
        }

        errorAlert.hidden = true;
        // Demo only: this form isn't wired to a backend, so nothing is actually
        // sent. Hook this up to a form service (e.g. Formspree) or your own
        // endpoint to receive real submissions.
        successAlert.textContent = 'Thanks, ' + name + '! Your message has been received — I\'ll be in touch soon.';
        successAlert.hidden = false;
    });
})();
