<?php

define('KELVINVAL', 273.15);
var_dump(KELVINVAL);

function convCelToKel(float $celsius): float{
    $kelvin = $celsius + KELVINVAL;
    return $kelvin;
}

function convCelToFar(float $celsius): float{
    $fahrenheit = $celsius * (9/5) + 32;
    return $fahrenheit;
}

function convFarToKel(float $fahrenheit): float{
    $kelvin = ($fahrenheit - 32) * 5/9 + KELVINVAL;
    return $kelvin;
}

function convFarToCel(float $fahrenheit): float{
    $celsius = ($fahrenheit - 32) * 5/9;
    return $celsius;
}
function convKelToCel(float $kelvin): float{
    $celsius = $kelvin - KELVINVAL;
    return $celsius;
}
function convKelToFar(float $kelvin): float{
    $celsius = ($kelvin - KELVINVAL) * 9/5 + 32;
    return $celsius;
}
var_dump(round(convFarToCel(10), 2));

