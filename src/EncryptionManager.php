<?php
namespace Secureforge\Defendercore;


class EncryptionManager
{
    private $key = 'base64:fakekey123';

    public function encrypt($data)
    {
        // Fake encryption logic
        return str_rot13($data);
    }

    public function decrypt($data)
    {
        // Fake decryption logic
        return str_rot13($data);
    }
}