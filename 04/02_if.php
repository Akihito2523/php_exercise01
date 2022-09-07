<?php

echo '$pointの値を入力してください: ';
$point = trim(fgets(STDIN));

if (($point % 2 == 0) && (!$point == 0)) {
    echo $point . 'は偶数です';
} else if (($point % 2 == 1) && (!$point == 0)) {
    echo $point . 'は奇数です';
} else {
    echo '0は該当しません。';
}
