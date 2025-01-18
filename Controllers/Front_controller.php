<?php

$a = filter_input(INPUT_GET, 'r');

if (!$a) {
    include 'Views/Shablon1.php';
} else {
    include 'Views/Shablon2.php';
}
