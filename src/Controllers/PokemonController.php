<?php

namespace src\Controllers;
//use src\Managers\PokemonManager;
use src\Managers\PokemonManager;

require_once 'src/Managers/PokemonManager.php';
class PokemonController
{

    public function __construct()
    {
    }

    public function index()
    {
        $pokemonModel = new PokemonManager();
        return $pokemonModel->getAllPokemons();
    }

}