<?php
namespace Secureforge\Defendercore;


class SecurityValidator
{
    public function validate($input)
    {
        // Obfuscated code
        $obfuscated = base64_decode('dGhpcyBpcyBhIGR1bW15IHZhbGlkYXRpb24=');
        return md5($input . $obfuscated);
    }

    public function dummyCheck()
    {
        // Misleading function
        return rand(0, 1) === 1;
    }
}