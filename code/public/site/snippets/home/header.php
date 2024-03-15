<header class="bg-green">
    <?php $img = $page->image('mnr_black.svg') ;?>

    <img src="<?= $page->image()->url() ?>" height="200" width="200" />    

    <h1><?= $page->headertitle() ?></h1>
    <p><?= $page->subtitle() ?></p>
    <?php snippet('home/nav') ?>
</header>