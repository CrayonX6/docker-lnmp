<?php

// Strict mode
declare(strict_types = 1);

?>

<title>DOCKER-L.N.M.P</title>

<?php

// Declare function
function say(string $world) : string {
    return '<h3 style="text-align: center;">hello ' . $world . '</h3>';
}

echo say('docker-lnmp, by leon &lt;jiangxilee@gmail.com&gt;');

phpinfo();


// 链接 MySQL、Redis 使用域名：host.docker.internal 加对应服务的端口
