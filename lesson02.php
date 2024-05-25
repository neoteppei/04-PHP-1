<?php
$apple_price = 100;
$apple_quantity = 1;

$grape_price = 200;
$grape_quantity = 3;


$total = ($apple_price * $apple_quantity) + ($grape_price * $grape_quantity);

echo "{$apple_price}円のリンゴを{$apple_quantity}個。\n";
echo "{$grape_price}円のブドウを{$grape_quantity}個。\n";
echo "合計は{$total}円です。";
?>
