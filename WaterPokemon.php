<?php

class WaterPokemon extends Pokemon
{
    public function attack(Pokemon $pokemon): void
    {
        echo "splish splash";
        $pokemon->hp -= 15;
    }

    public function surf()
    {
        echo "I'm surfing";
    }
}