# CapturePokemon

A game of capturing pokemons giving directions to the player.
The user send a sequence of characters giving directions as this one:

- N -> player goes north;
- S -> player goes south;
- O -> player goes west;
- E -> player goes east;
- Any other letter player stand still

Each direction take, the player captures a pokemon. But if the player goes into
a direction that he already went, then no pokemons captured.

The game returns the number of pokemons that the player took after walking in
all those directions.

# How to use it

```
// import the package
use danielsonsilva\CapturePokemon\PokemonGame;

// Create your object
$pokemonGame = new PokemonGame();

// create your paths using the four options provided
$pathOne = "NSOOEESNN";
$pathTwo = "OESSSNNEE";

// Then let the player walk in those directions
$numberCapturedPokemon1 = $pokemonGame->walkDirections($pathOne);
$numberCapturedPokemon2 = $pokemonGame->walkDirections($pathTwo);

// get the number of pokemons
echo $numberCapturedPokemon1; // 5
echo $numberCapturedPokemon2; // 7
```

# Version History

## v 1.0.0

- Package danielsonsilva/CapturePokemon created;
- Features: walk directions provided to determine number of pokemons captures
- Unit tests to check its effectiveness, memory usage and performance
