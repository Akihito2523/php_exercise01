<?php

echo '$scoreの値を入力してください: ';
$score = trim(fgets(STDIN));

if ($score >= 60) {
    echo $score . '以上で合格です';
} else if ($score >= 30) {
    echo $score . 'で追試です';
} else {
    echo $score . '点未満で不合格です';
}
