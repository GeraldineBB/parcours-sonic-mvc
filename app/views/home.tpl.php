<h1>Les personnages</h1>

<table>
    <thead>
        <th>Image</th>
        <th>Nom</th>
        <th>Type</th>
        <th>Description</th>

    </thead>
    <tbody>

        <?php foreach ($characterHome as $character) : ?>

            <tr>
                <td> <img src="<?= $character->getPicture() ?>" alt="character"> </td>
                <td> <?= $character->getName() ?> </td>
                <td> <?= $character->getType()->getName() ?> </td>
                <td> <?= $character->getDescription() ?> </td>

            </tr>
        <?php endforeach ?>


    </tbody>
</table>