<?php
$url = '';
foreach ($_POST as $key => $value) {
    $url .= $key . '=' . $value;
    if (end ($_POST) != $value){
    $url .= '$';
    }
}
echo $url . '<br>
    $redirect = 'localhost:63342/IT-SCHOOL/PHP/PHP/get.php/' . $url;
    header('Location: ' . $redirect);