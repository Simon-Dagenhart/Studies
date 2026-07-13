# Seneta

English and computer skills, taught online — plus website development for businesses.

Seneta is a small business/teaching site built with plain PHP, HTML, CSS, and vanilla
JavaScript. No framework, no build step, no database — course data lives in a plain
PHP array.

## Pages

- **Home** (`index.php`) — introduction and overview of what's offered
- **Courses** (`courses.php`) — English and computer-skills courses, filterable by category
- **About** (`about.php`) — background and teaching approach
- **Contact** (`contact.php`) — enquiry form, with the course dropdown pre-filled when
  arriving from a specific course's "Enquire" link

## Running locally

Requires PHP installed (XAMPP includes it). From the project root:

```
php -S localhost:8000
```

Then visit `http://localhost:8000`.

Alternatively, if this folder lives inside your XAMPP `htdocs` directory, start Apache
from the XAMPP control panel and visit `http://localhost/english-teaching/`.

## Project structure

```
english-teaching/
├── index.php
├── courses.php
├── about.php
├── contact.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── courses_data.php   # course catalog — edit this to add/change courses
└── assets/
    ├── css/style.css
    └── js/
        ├── main.js         # mobile nav toggle
        └── courses.js      # course category filter
```

## Notes

- The contact form validates input and shows a confirmation message, but does **not**
  send real email yet. Wire up `mail()`/SMTP (or a transactional email service) before
  relying on it in production.
- Course details, pricing, and the About page bio are meant to be edited to match your
  real background and offerings.
