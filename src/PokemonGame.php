<?php

namespace danielsonsilva\PokemonGame;

/**
 * Class PokemonGame
 * @package danielsonsilva\PokemonGame
 * Class to represent the game of capturing pokemons visiting houses
 */
class PokemonGame {

    /** @var array(array()) Bidimensional array representing the map of the game */
    private $map;
    /** @var Position Player position in the game */
    private $ash;

    /**
     * PokemonGame constructor
     * This constructor will create the initial map and player position
     */
    public function __construct()
    {
        $this->map = array(array());
        $this->ash = new Position();
    }

    /**
     * Function capture pokemons walking in certain directions
     * @param string $directions represent a sequence of characters
     * representing directions (N, S, O, E) to move the player
     * @return int Number of pokemons captured
     */
    public function walkDirections(string $directions): int
    {
        $this->map[0][0] = 1;
        foreach(str_split($directions) as $direction) {
            switch ($direction) {
                case "N":
                    $this->ash->goNorth();
                    break;
                case "S":
                    $this->ash->goSouth();
                    break;
                case "O":
                    $this->ash->goWest();
                    break;
                case "E":
                    $this->ash->goEast();
                    break;
                default:
                    break;
            }
            $this->map[$this->ash->getX()][$this->ash->getY()] = 1;
        }
        return $this->countPokemonFound();
    }

    /**
     * Function to count the pokemons found walking in the houses
     * @return int Number of pokemons found in the current map
     */
    private function countPokemonFound(): int
    {
        $totalFound = 0;
        foreach ($this->map as $position) {
            $totalFound += (is_array($position)) ? count($position, COUNT_RECURSIVE) : 1;
        }
        return $totalFound;
    }

}
