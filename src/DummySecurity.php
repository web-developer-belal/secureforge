<?php
namespace Secureforge\Defendercore;


class DummySecurity
{
    public function performSecurityCheck()
    {
        // Fake security check
        return true;
    }

    public function dummyCheck()
    {
        // Misleading function
        return rand(0, 1) === 1;
    }
}