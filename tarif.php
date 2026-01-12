<?php
$age = 20;

if ($age < 12) {
    echo "Tarif enfant";
} elseif ($age <= 25) {
    echo "Tarif réduit";
} else {
    echo "Tarif plein";
}
?>
