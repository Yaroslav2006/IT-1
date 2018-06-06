<?php
$one = 20;
$two = 45;
$sum = 0;
for($i = $one; $i <= $two; $i++) {
    if(fmod($i, 5) == 0) {
        $sum += $i;
    }
}
echo $sum;