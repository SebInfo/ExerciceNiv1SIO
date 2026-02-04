<?php
$debut = 5;
$fin = 30;
$pas = 1;

echo "<h1>Compteur</h1>";

$i = $debut;
while ($i <= $fin) {
    echo $i . "<br>";
    $i += $pas;
}
?>
