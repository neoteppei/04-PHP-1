<?php
$randomNumbers = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = rand(0, 99);
}

var_dump($randomNumbers);
?>