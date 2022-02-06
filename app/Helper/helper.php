<?php

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Carbon;
if (!function_exists('encoder')) {
    function encoder ($connection, $id) {
        return Hashids::connection($connection)->encode($id);
    }
}

if (!function_exists('decoder')) {
    function decoder ($connection, $id) {
        $decodeId = Hashids::connection($connection)->decode($id);

        if (isset($decodeId[0])) {
            return $decodeId[0];
        }

        throw new Exception("Invalid Hashid");
    }
}

if (!function_exists('productslug')) {
    function productslug($arg, $timestamp = true, $sperator = "-"): string
    {
        $time = '';
        if ($timestamp) {
            if (is_bool($timestamp)) {
                $time = '-' . str_replace(':', '-', Carbon::now());
            } else {
                $time = '-' . str_replace(':', '-', Carbon::parse($timestamp)->format('Y-m-d-g-i-s'));
            }
        }

        if (is_array($arg)) {
            return Str::slug(implode($sperator, str_replace('.', '-', $arg)) . $time);
        }

        return Str::slug(str_replace('.', '-', $arg) . $time);
    }
}


if (!function_exists('numberTranslate')) {
    function numberTranslate($data)
    {
        $array = [];
        $temp = str_split($data, 1);
        foreach ($temp as $value) {
            $array[] = trans($value, [], session('locale'));
        }
        return implode("", $array);
    }
}