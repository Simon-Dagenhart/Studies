<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' – Seneta' : 'Seneta'; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a href="index.php" class="logo">🌵 <span class="logo-name">Seneta</span></a>
        <nav class="main-nav">
            <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">☰</button>
            <ul id="navList">
                <li><a href="index.php" class="<?php echo $current_page === 'index.php' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="courses.php" class="<?php echo $current_page === 'courses.php' ? 'active' : ''; ?>">Courses</a></li>
                <li><a href="about.php" class="<?php echo $current_page === 'about.php' ? 'active' : ''; ?>">About</a></li>
                <li><a href="contact.php" class="<?php echo $current_page === 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
