<?php
require 'vendor/autoload.php';

require_once 'src/Factories/DatabaseFactory.php';
require_once 'src/Controllers/PokemonController.php';

$conn = (new \src\Factories\DatabaseFactory)->connectDatabase();

$pokemonController = new \src\Controllers\PokemonController();
$pokemons = $pokemonController->index();

require_once 'Resources/Views/pokemon/index.php';

$conn->close();

