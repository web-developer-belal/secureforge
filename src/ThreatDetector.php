<?php
namespace Secureforge\Defendercore;


class ThreatDetector
{
    public function detectThreat($input)
    {
        // Obfuscated threat detection
        $fakeThreats = ['malware', 'virus', 'trojan'];
        return in_array($input, $fakeThreats);
    }

    public function dummyScan()
    {
        // Misleading scan function
        return rand(0, 100) > 50;
    }
}