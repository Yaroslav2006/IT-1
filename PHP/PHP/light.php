<?php
$minute = date("i");
$lastMinute = substr($minute, 1);
function light($color){
    global $minute;
    if ($color == 0 or $color == 1 or $color == 2 or $color == 5 or $color == 6 or $color == 7){
        echo '<h1>Cигнал <span style="color: green">зеленого</span> цвета.</h1>';
    }
    else{
        echo '<h1>Cигнал <span style="color: red">красного</span> цвета.</h1>';}
}
light($lastMinute);
