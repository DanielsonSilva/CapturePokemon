<?php

namespace danielsonsilva\CapturePokemon;

/**
 * Class Position
 * @package danielsonsilva\Position
 * Class to represent a position in a map, imaginating a cartesian plane
 */
class Position
{
    /** @var int x Position on horizontal axis of the cartesian plane*/
    private $x;
    /** @var int y Position on vertical axis of the cartesian plane*/
    private $y;

    /**
     * Position constructor
     *
     * This constructor will create the initial position on the cartesian plane
     * @param int x Initial horizontal position
     * @param int y Initial vertical position
     */
    public function __construct(int $x = 0, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Function to move the position north
     */
    public function goNorth(): void
    {
        $this->y++;
    }

    /**
     * Function to move the position south
     */
    public function goSouth(): void
    {
        $this->y--;
    }

    /**
     * Function to move the position west
     */
    public function goWest(): void
    {
        $this->x--;
    }

    /**
     * Function to move the position east
     */
    public function goEast(): void
    {
        $this->x++;
    }

    /**
     * Function to view the current horizontal position
     * @return int Current horizontal position
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Function to view the current vertical position
     * @return int Current vertical position
     */
    public function getY(): int
    {
        return $this->y;
    }

}
