<?php
$countries = array(
    "日本" => "東京",
    "アメリカ" => "ワシントン",
    "イギリス" => "ロンドン",
    "フランス" => "パリ"
);

foreach ($countries as $country => $capital) {
    echo "{$country}の首都は{$capital}です。<br>";
}
?>