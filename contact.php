<?php
$page_title = 'Contact';
require_once __DIR__ . '/includes/courses_data.php';

$errors = [];
$success = false;
$courses = get_courses();

$selectedCourse = $_POST['course'] ?? $_GET['course'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') $errors[] = 'Name is required.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if ($message === '') $errors[] = 'Please include a short message.';

    if (empty($errors)) {
        // Demo only: in production this would email/store the enquiry.
        $success = true;
    }
}

require_once __DIR__ . '/includes/header.php';
?>
<section class="container narrow">
    <h1 class="section-title">Get in Touch</h1>
    <p>Questions about a course, ready to book a free trial lesson, or need a website for your business? Send a message and I'll get back to you.</p>

    <?php if ($success): ?>
        <p class="alert alert-success">Thanks, <?php echo htmlspecialchars($name); ?>! Your message has been received — I'll be in touch soon.</p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <ul class="alert alert-error">
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="contact.php" class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">

        <label for="course">I'm Interested In</label>
        <select id="course" name="course">
            <option value="">Not sure yet</option>
            <optgroup label="Courses">
                <?php foreach ($courses as $course): ?>
                <option value="<?php echo htmlspecialchars($course['slug']); ?>" <?php echo $selectedCourse === $course['slug'] ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($course['title']); ?>
                </option>
                <?php endforeach; ?>
            </optgroup>
            <optgroup label="Other Services">
                <option value="website-development" <?php echo $selectedCourse === 'website-development' ? 'selected' : ''; ?>>
                    Website Development for My Business
                </option>
            </optgroup>
        </select>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Tell me a bit about your goals and your preferred schedule..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
