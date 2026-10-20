<?php

namespace App\Classes;

use Illuminate\Support\Str;

class CodeGenerator
{
    /**
     * Generate Registration Code
     * Example: REG26A8F3D92K1L
     */
    public static function registrationCode(): string
    {

        do {
            $code = random_int(1, 9999999);
        } while (\App\Models\Participant::where('code', $code)->exists());

        return $code;
    }
}
