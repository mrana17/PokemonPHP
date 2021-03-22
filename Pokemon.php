<?php

abstract class Pokemon
{
    protected string $name;
    protected string $type;
    protected int $hp;

    public function __construct(string $name, $hp = 80)
    {
        $this->name = $name;
        $this->hp = $hp;
    }

    protected abstract function attack(Pokemon $pokemon): void;

    public function flee(): void
    {
        echo $this->name . " ran away";
    }

    public function evolve(): void
    {
        echo $this->name . " evolved";
    }

    public function setName(string $name): Pokemon
    {
        $this->name = $name;
        return $this;
    }

    public function setHp(int $hp): Pokemon
    {
        $this->hp = $hp;
        return $this;
    }

    public function setType(string $type): Pokemon
    {
        $this->type = $type;
        return $this;
    }
}