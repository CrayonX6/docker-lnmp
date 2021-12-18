<?php

const BR = "<br><hr>";

$world = function () {
    return "世界";
};

/**
 * @throws Exception
 */
$hello = function ($something) {
    if (is_callable($something)) {
        echo "你好，" . $something();
    } else {
        if (is_scalar($something)) {
            echo "你好，" . $something;
        } else {
            throw new Exception("传入的参数 something 不是一个可调用方法或标量");
        }
    }
};


try {
    $hello("php");
} catch (Exception $e) {
    print_r($e->getMessage());
}
