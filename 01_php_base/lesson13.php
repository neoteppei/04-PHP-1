<?php
// 現在日時の取得
$currentDateTime = new DateTime();
echo $currentDateTime->format('Y年 m月 d日 H時 i分 s秒') . "<br>";

// 現在日時から3日後の日時を取得
$threeDaysLater = clone $currentDateTime;
$threeDaysLater->modify('+3 days');
echo $threeDaysLater->format('Y年 m月 d日 H時 i分 s秒') . "<br>";

// 現在日時から12時間前の日時を取得
$twelveHoursEarlier = clone $currentDateTime;
$twelveHoursEarlier->modify('-12 hours');
echo $twelveHoursEarlier->format('Y年 m月 d日 H時 i分 s秒') . "<br>";

// 2020年元旦から現在までの経過日数を取得
$newYearsDay2020 = new DateTime('2020-01-01');
$interval = $newYearsDay2020->diff($currentDateTime);
echo  $interval->days . "日<br>";
?>