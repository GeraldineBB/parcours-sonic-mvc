<h1>Test home</h1>



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
                <td> <?= $character->getName() ?> </td>
                <td> <?= $character->getType()->getName() ?> </td>
            </tr>
        <?php endforeach ?>


    </tbody>
</table>