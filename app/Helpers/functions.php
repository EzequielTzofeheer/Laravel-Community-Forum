<?php

namespace App\Helpers;

if (! function_exists('is_email'))
{
    function isEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE;
    }
}
