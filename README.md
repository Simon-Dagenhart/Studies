# Up Is To Go

English and computer skills, taught online — plus website development for businesses.

Up Is To Go is a small business/teaching site built with plain HTML, CSS, and vanilla
JavaScript. No framework, no build step, no backend — it's fully static, so it works
on any static host (GitHub Pages, Netlify, S3, or just opening the files directly).

## Pages

- **Home** (`index.html`) — introduction and overview of what's offered
- **Courses** (`courses.html`) — English and computer-skills courses, filterable by category
- **About** (`about.html`) — background and teaching approach
- **Contact** (`contact.html`) — enquiry form, with the course dropdown pre-filled when
  arriving from a specific course's "Enquire" link (e.g. `contact.html?course=business-english`)

## Running locally

No server required — just open `index.html` in a browser. If you'd rather serve it
(recommended, so relative links behave exactly as they will in production), any static
file server works, for example:

```
npx serve .
```

or, with PHP installed (e.g. via XAMPP):

```
php -S localhost:8000
```

Then visit `http://localhost:8000`.

## Project structure

```
english-teaching/
├── index.html
├── courses.html
├── about.html
├── contact.html
└── assets/
    ├── css/style.css
    └── js/
        ├── main.js       # mobile nav toggle + footer year
        ├── courses.js    # course category filter
        └── contact.js    # form validation, course pre-fill, demo submit handling
```

## Notes

- The contact form validates input client-side and shows a confirmation message, but
  it is **not** wired to send real email — there's no backend. To receive real
  submissions on a static host, connect the form to a service like
  [Formspree](https://formspree.io/) or Netlify Forms, or point it at your own API.
- Course cards live directly in `courses.html`, and the same course list is repeated
  as `<option>`s in `contact.html`'s dropdown — when adding or editing a course, update
  both places.
- Course details, pricing, and the About page bio are meant to be edited to match your
  real background and offerings.
