<?php


if (! function_exists('words')) {
    /**
     * Limit the number of words in a string.
     *
     * @param  string  $value
     * @param  int     $words
     * @param  string  $end
     * @return string
     */
    function words($value, $limit = 80, $end = '...')
    {
        return \Illuminate\Support\Str::words($value, $limit, $end);
    }
}
 
