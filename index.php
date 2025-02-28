<?php
$name = "Fran";
$is_dev = true;
$age = 39;
$newAge = '44' + 1;
$newConta = '11' . 1;

var_dump($name);
var_dump($newAge);
var_dump($age);
var_dump($is_dev);
var_dump($newConta);

echo gettype($newConta);

$output = "Hola $name";
const NOMBRE = 'Fran';



?>

<h1>
    <?= "Hola " . $name . ", con una edad de " . $age . NOMBRE ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>