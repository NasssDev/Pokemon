<html>
    <head>
        <title>Pokemons</title>
    </head>
    <body>
        <h1>Pokemons</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pokemons as $pokemon) : ?>
                    <tr>
                        <td><?= $pokemon->getName() ?></td>
                        <td><?= $pokemon->getType() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
