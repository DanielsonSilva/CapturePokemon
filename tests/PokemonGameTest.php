<?php

namespace danielsonsilva\PokemonGame\Tests;

require_once(__DIR__ . '\\..\\vendor\\autoload.php');

use PHPUnit\Framework\TestCase;
use danielsonsilva\CapturePokemon\PokemonGame;

/**
 * Function to test some cases to the PokemonGame
 */
final class PokemonGameTest extends TestCase
{
    /**
     * Function to test going just one direction one time
     */
    public function testGoOneDirectionOneTime(): void
    {
        $pg = new PokemonGame();
        $direction = "E";
        $numPokemon = $pg->walkDirections($direction);

        $this->assertEquals(2, $numPokemon);
    }

    /**
     * Function to test going all directions one time
     */
    public function testGoAllDirectionOneTime(): void
    {
        $pg = new PokemonGame();
        $direction = "NESO";
        $numPokemon = $pg->walkDirections($direction);

        $this->assertEquals(4, $numPokemon);
    }

    /**
     * Function to test going north and south several times
     */
    public function testGoNorthSouthSeveralTimes(): void
    {
        $pg = new PokemonGame();
        $direction = "NSNSNSNSNS";
        $numPokemon = $pg->walkDirections($direction);

        $this->assertEquals(2, $numPokemon);
    }

    /**
     * Function to test some memory usage
     */
    public function testMemoryUsage(): void
    {
        $pg = new PokemonGame();
        $direction = "NSNSNSNSNS";
        $numPokemon = $pg->walkDirections($direction);

        $this->assertEquals(2, $numPokemon);
    }

    /**
     * Function to test performance
     */
    public function testPerformance(): void
    {
        $pg = new PokemonGame();
        $direction = "NSNSNSNSNS";
        $numPokemon = $pg->walkDirections($direction);

        $this->assertEquals(2, $numPokemon);
    }



}
