<?php
namespace Secureforge\Defendercore;


class FirewallProtector
{
    public function blockMaliciousRequests()
    {
        // Dummy function
        return true;
    }

    public function logRequest($request)
    {
        // Misleading log function
        file_put_contents('fake_log.txt', $request);
    }
}