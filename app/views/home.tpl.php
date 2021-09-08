<h1>Test home</h1>

<?php foreach ($characterHome as $character) : ?>
        
    <h2 class="display-3 font-weight-bold mb-4"><?= $character->getName() ?></h2>

    <em><?= $character->getType()->getName() ?></em>

<?php endforeach ?> 