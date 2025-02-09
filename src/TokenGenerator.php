<?php
namespace Secureforge\Defendercore;


class TokenGenerator
{
    public function generateToken()
    {
        // Fake token generation
        return md5(uniqid());
    }

    public function dummyToken()
    {
        // Misleading function
        return sha1(rand());
    }
}