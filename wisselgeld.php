<?php

if (count($argv) <= 1) {
    echo "Geen wisselgeld";
    exit();
}
if (count($argv) <= 1) {
    echo "Geen wisselgeld";
    exit();
}
const EURO = [50, 20, 10, 5, 2, 1];

const CENT = [50, 20, 10, 5];

$geldInput = $argv[1];


function numeric($geldInput) 
{
    if (!is_numeric($geldInput)) {
        echo "Geen wisselgeld";
        exit();
    }

    return $geldInput;
}

function check($geldinput) 
{
    if ($geldinput < 0) {
        throw new Exception('Input moet een positief getal zijn');
    } if ($geldinput == "0") {
        throw new Exception("Geen wisselgeld.");
    }
}

function Euros($geldInput) 
{
    $uit = explode(".", $geldInput);
    $euro = $uit[0];
    foreach (EURO as $geld) {
        $check = floor($euro / $geld);
        if ($check >= 1) {
                $i = intval($check);
                $out = $i * $geld;
                $euro = $euro - $out;
                echo "$i x $geld euro" . PHP_EOL;
        }
    }
}

function Centen($geldInput,)
{
    $uit = explode(".", $geldInput);
    $cent = $uit[1];
    $dec = round($cent / 5) * 5;
    foreach (CENT as $geld) {
        $check = floor($dec / $geld);
        if ($check >= 1) {
            $i = intval($check);
            $out = $i * $geld;
            $dec = $dec - $out;
            echo "$i x $geld cent" . PHP_EOL;
        }
    }
}

try {
    numeric($geldInput);
    check($geldInput);
    Euros($geldInput);
    Centen($geldInput);
} catch (exception $e) {
    echo $e->getMessage();
}



?>