<?php
namespace App\Library;

class Helper
{
    public static function asci(string $deger): bool
    {
        $array = str_split($deger);
        $out = [];
        foreach ($array as $chr) {
            if (
                ($chr >= 'a' && $chr <= 'z')
                || ($chr >= 'A' && $chr <= 'Z') ||
                ($chr >= '0' && $chr <= '9')
                || $chr == '.' || $chr == '_') {
                $out[] = $chr;
            }
        }
        $out_string = implode('', $out);
        if ($out_string != $deger) {
            return true;
        } else {
            return false;
        }
    }
}


?>