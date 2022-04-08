<?php

namespace App;

use App\Hero;

class Arena
{
    private array $monsters;
    private Hero $hero;
    private int $size;

    public function __construct(array $monsters, Hero $hero, int $size = 10)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
        $this->size = $size;
    }

    /**
     * Get the value of monsters
     */ 
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     *
     * @return  self
     */ 
    public function setMonsters($monsters): void
    {
        $this->monsters = $monsters;
    }

    /**
     * Get the value of hero
     */ 
    public function getHero(): Hero
    {
        return $this->hero;
    }

    /**
     * Set the value of hero
     *
     * @return  void
     */ 
    public function setHero($hero): void
    {
        $this->hero = $hero;
    }

    /**
     * Get the value of size
     */ 
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size): void
    {
        $this->size = $size;
    }

    public function getDistance(Fighter $fighter1, Fighter $fighter2)
    {
        return sqrt(($fighter2->getX() - $fighter1->getX())**2 
                + ($fighter2->getY() - $fighter1->getY())**2);
    }

    public function touchable(Fighter $attacker, Fighter $target): bool
    {
        return $attacker->getRange() > $this->getDistance($attacker, $target) ? true : false;
    }
}