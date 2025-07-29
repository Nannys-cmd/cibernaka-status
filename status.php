<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=utf-8");

$servers = [
    "Anakim" => 7777,
    "Lilith" => 7778,
    "Desperion" => 7779
];

$ip = "mendozal2.ddns.net";
$timeout = 2;

echo "<table border='1' cellpadding='6' style='color:white; background-color:black; font-family:monospace;'>";
echo "<tr><th colspan='2'>Estado de los Servidores</th></tr>";

foreach ($servers as $name => $port) {
    $connection = @fsockopen($ip, $port, $errno, $errstr, $timeout);
    $status = $connection ? "<span style='color:lime;'>Online</span>" : "<span style='color:red;'>Offline</span>";
    echo "<tr><td>$name</td><td>$status</td></tr>";
    if ($connection) fclose($connection);
}

echo "</table>";

?>
