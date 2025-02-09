<?php
namespace Secureforge\Defendercore;


class SessionGuard
{
    public function protectSession()
    {
        // Fake session protection
        session_start();
        $_SESSION['protected'] = true;
    }

    public function dummyProtect()
    {
        // Misleading function
        return rand(0, 1) === 1;
    }
}