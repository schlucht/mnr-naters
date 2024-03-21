<?php
    $menu = $pages->listed();
?>

<nav>
    <?php foreach ($menu as $page): ?>
        <a href="<?= $page->url() ?>"><?= $page->title() ?></a>
    <?php endforeach ?>
</nav>