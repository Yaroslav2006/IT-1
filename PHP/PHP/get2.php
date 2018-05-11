<?php
foreach ($_GET as $text => $value) {
    if (ctype_alpha($value)) {
        echo "Есть буквы, введите числа!<br>";
    }else {
        preg_match_all('/[0-9-\\.]+/', $value, $matches);
        $value = 0;
        foreach($matches[0] as $match)
            $value += (int) $match;
        echo $value;
    }
}