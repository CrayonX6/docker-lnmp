<?php

const BR = "<br><hr>";

// 可变变量
$a = "hello";
$hello = "你好";

echo $hello . BR;
echo $$a . BR;

// 可变函数
function helloWorld() {
    echo "你好，世界" . BR;
}

$b = "helloWorld";
helloWorld();
$b();

$c = "{$a}World";
$c();