<?php
$page_title = 'Courses';
require_once __DIR__ . '/includes/courses_data.php';
require_once __DIR__ . '/includes/header.php';

$courses = get_courses();
?>
<section class="container">
    <h1 class="section-title">Courses</h1>
    <p class="section-intro">All courses are taught live, one-on-one or in small groups, over video call. Don't see quite what you need? <a href="contact.php">Get in touch</a> and we can tailor a plan.</p>

    <div class="filter-tabs" id="filterTabs">
        <button type="button" class="filter-tab active" data-category="all">All Courses</button>
        <button type="button" class="filter-tab" data-category="english">English</button>
        <button type="button" class="filter-tab" data-category="computer">Computer Skills</button>
    </div>

    <div class="course-grid" id="courseGrid">
        <?php foreach ($courses as $course): ?>
        <div class="course-card" data-category="<?php echo htmlspecialchars($course['category']); ?>">
            <div class="course-icon"><?php echo $course['icon']; ?></div>
            <h3><?php echo htmlspecialchars($course['title']); ?></h3>
            <p class="course-level"><?php echo htmlspecialchars($course['level']); ?></p>
            <p class="course-desc"><?php echo htmlspecialchars($course['desc']); ?></p>
            <ul class="course-meta">
                <li>🗓️ <?php echo htmlspecialchars($course['duration']); ?></li>
                <li>📍 <?php echo htmlspecialchars($course['format']); ?></li>
            </ul>
            <a href="contact.php?course=<?php echo urlencode($course['slug']); ?>" class="btn btn-outline">Enquire About This Course</a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
$extra_scripts = ['assets/js/courses.js'];
require_once __DIR__ . '/includes/footer.php';
?>
