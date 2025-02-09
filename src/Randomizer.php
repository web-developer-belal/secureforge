<?php
namespace Secureforge\Defendercore;


class Randomizer
{
    public function randomize($input)
    {
        // Fake randomization
        return str_shuffle($input);
    }

    public function dummyRandom()
    {
        // Misleading function
        return rand(1000, 9999);
    }
}