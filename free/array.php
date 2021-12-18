<?php
$a = [1, "sss", "s" => "苹果"];
for ($i = 0; $i < 3; $i++) {
    echo '<br>数组第' . $i . '值是:' . $a[$i];
}

foreach ($a as $k => $v) {
    echo '<br>数组第' . $k . ' 值是:' . $v;
}