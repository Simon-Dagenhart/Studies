</main>
<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; <?php echo date('Y'); ?> Seneta. English &amp; computer skills, taught online.</p>
    </div>
</footer>
<script src="assets/js/main.js"></script>
<?php if (!empty($extra_scripts)): foreach ($extra_scripts as $script): ?>
<script src="<?php echo htmlspecialchars($script); ?>"></script>
<?php endforeach; endif; ?>
</body>
</html>
