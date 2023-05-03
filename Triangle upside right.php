<?php
function TriangleUpsideRight($baris) {
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $baris-$i; $j++) {
            echo "&nbsp;&nbsp;"; // memberikan spasi
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
$baris = 5; // jumlah baris
TriangleUpsideRight($baris);
?>