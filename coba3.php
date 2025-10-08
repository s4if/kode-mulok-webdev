<?php
// Perulangan di PHP itu ada 2, pakai While dan For
// While
$i = 1; // variabel kontrol
while ($i < 10) {
    // kondisi while
    echo $i . "<br>"; // hati2 infinite loop
    $i++; // kalau di python sama saja dengan i += 1
}
// For Loop
for ($i = 0; $i < 10; $i++) {
    echo $i . "--->><<---";
}
echo "<br><br>";
for ($i = 1; $i <= 8; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
// Tugas, balik output dari for bertingkat
// 1 2 3 4 5 6 7 8
// 1 2 3 4 5 6 7
// 1 2 3 4 5 6
// ...dst
echo "<br><br>";
for ($i = 8; $i > 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
