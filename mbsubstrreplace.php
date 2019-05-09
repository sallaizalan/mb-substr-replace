<?php

/**
 * @param string $string
 * @param string $replacement
 * @param int $start
 * @param int $length
 * @return string
 */
function mb_substr_replace($string, $replacement, $start, $length = 1)
{
    $startString = mb_substr($string, 0, $start, "UTF-8");
    $endString = mb_substr($string, $start + $length, mb_strlen($string), "UTF-8");
 
    $out = $startString . $replacement . $endString;
 
    return $out;
}