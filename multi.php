<?php
$nombre = 5;   // Tu peux changer la valpheur

echo "<h1>Table de multiplication de $nombre</h1>";

for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " x " . $i . " = " . ($nombre * $i) . "<br>";
}
?>
