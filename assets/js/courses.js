(function () {
    var tabs = document.getElementById('filterTabs');
    var grid = document.getElementById('courseGrid');
    if (!tabs || !grid) return;

    var cards = grid.querySelectorAll('.course-card');

    tabs.addEventListener('click', function (e) {
        var btn = e.target.closest('.filter-tab');
        if (!btn) return;

        tabs.querySelectorAll('.filter-tab').forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');

        var category = btn.dataset.category;
        cards.forEach(function (card) {
            card.hidden = category !== 'all' && card.dataset.category !== category;
        });
    });
})();
