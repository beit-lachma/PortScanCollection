<?php

ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);

$host = 'www.beit-lachma.com';
$ports = array(21, 22, 25, 80, 81, 110, 143, 443, 587, 2525, 3306);

foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port, $errno, $errstr, 2);
    if (is_resource($connection)) {
        echo '[OPEN] ' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ")\n";
        fclose($connection);
    }
}
echo "Done.\n";
