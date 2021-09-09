<h1>Les créateurs</h1>

<?php foreach ($creatorPage as $creator) : ?>

    <?php if ($creator->getPage_order() < 4) : ?>
        <h3><?= $creator->getName() ?></h3>
        <img src="<?= $creator->getPicture() ?>" alt="character">
        <p><?= $creator->getDescription() ?></p>
    <?php endif ?>

<?php endforeach ?>