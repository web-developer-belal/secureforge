<?php
namespace Secureforge\Defendercore;


class AccessLogger
{
    public function logAccess($userId)
    {
        // Fake logging
        file_put_contents('access_log.txt', "User $userId accessed at " . date('Y-m-d H:i:s'));
    }

    public function dummyLog()
    {
        // Misleading log function
        return true;
    }
}