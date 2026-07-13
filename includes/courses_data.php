<?php
// Course catalog. Edit descriptions, durations, and pricing freely — this is
// plain data, no database required.

function get_courses() {
    return [
        [
            'slug' => 'english-foundations',
            'category' => 'english',
            'icon' => '🔤',
            'title' => 'English Foundations',
            'level' => 'Beginner (A1–A2)',
            'duration' => '8 weeks · 2 lessons/week',
            'format' => 'Online, 1-on-1 or small group',
            'desc' => "Build a solid base in grammar, vocabulary, and everyday phrases. Perfect if you're starting from scratch or want to shore up the fundamentals before moving on.",
        ],
        [
            'slug' => 'conversational-english',
            'category' => 'english',
            'icon' => '💬',
            'title' => 'Conversational English',
            'level' => 'Intermediate (B1–B2)',
            'duration' => 'Ongoing · flexible pace',
            'format' => 'Online, 1-on-1 or small group',
            'desc' => "Focused speaking practice for real-life situations — small talk, storytelling, opinions, and thinking on your feet without translating in your head first.",
        ],
        [
            'slug' => 'business-english',
            'category' => 'english',
            'icon' => '💼',
            'title' => 'Business English',
            'level' => 'Intermediate–Advanced',
            'duration' => '6 weeks',
            'format' => 'Online, 1-on-1',
            'desc' => "Professional emails, meetings, presentations, and negotiation language for the workplace. Tailored to your industry and role.",
        ],
        [
            'slug' => 'computer-basics',
            'category' => 'computer',
            'icon' => '🖥️',
            'title' => 'Computer Basics for Beginners',
            'level' => 'Beginner',
            'duration' => '4 weeks',
            'format' => 'Online, 1-on-1 or small group',
            'desc' => "Get comfortable with a computer from the ground up: navigating the desktop, files and folders, safe browsing, and everyday tasks.",
        ],
        [
            'slug' => 'software-essentials',
            'category' => 'computer',
            'icon' => '🗂️',
            'title' => 'Software Essentials',
            'level' => 'Beginner–Intermediate',
            'duration' => '6 weeks',
            'format' => 'Online, 1-on-1',
            'desc' => "Word processing, spreadsheets, email, and video calls — the software skills used daily in almost any job or study program.",
        ],
        [
            'slug' => 'hardware-basics',
            'category' => 'computer',
            'icon' => '🔧',
            'title' => 'Hardware Basics & Troubleshooting',
            'level' => 'Beginner',
            'duration' => '4 weeks',
            'format' => 'Online, 1-on-1',
            'desc' => "Understand what's actually inside a computer, what the common parts do, and how to troubleshoot everyday problems yourself before calling for help.",
        ],
    ];
}

function get_course_by_slug($slug) {
    foreach (get_courses() as $c) {
        if ($c['slug'] === $slug) return $c;
    }
    return null;
}
