<?php if ($_SESSION['login'] == 'admin'): ?>
    <h1>Панель администрирования</h1>
    <nav>
        <a href="/edit_portfolio" class="portfolio">Портфолио</a>
    </nav>
<?php else: header("location: /"); ?>
<?php endif; ?>
