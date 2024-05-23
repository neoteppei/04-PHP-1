<?php
$today = new DateTime();

$formattedDate = $today->format('Y年m月d日');

$weekdays = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'];
$dayOfWeek = $weekdays[$today->format('w')];

echo "{$formattedDate} ({$dayOfWeek})";
?>