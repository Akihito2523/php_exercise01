<?php

echo '$numの値を入力してください: ';
$num = trim(fgets(STDIN));

for ($i = 2; $i <= ($num / 2); $i++) {
    if (($num % $i) == 0) {
        break;
    }
}
if ($i > ($num / 2)) {
    echo $num . 'は素数です。';
} else {
    echo $num . 'は素数ではありません。';
}
