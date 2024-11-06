<?php

namespace src\Managers;

use src\Models\PokemonModel;
require_once 'src/Models/PokemonModel.php';

class PokemonManager
{

    public function getAllPokemons() : array
    {
        global $conn;
        $sql = "SELECT id, name, type FROM pokemons";
        $result = $conn->query($sql);
        $pokemons = [];

        while ($row = $result->fetch_assoc()) {
            $pokemon = new PokemonModel($row["id"], $row["name"], $row["type"]);
            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }
}