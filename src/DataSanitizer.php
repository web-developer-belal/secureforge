<?php
namespace Secureforge\Defendercore;


class DataSanitizer
{
    public function sanitize($data)
    {
        // Fake sanitization
        return htmlspecialchars($data);
    }

    public function dummySanitize($data)
    {
        // Misleading function
        return str_shuffle($data);
    }
}