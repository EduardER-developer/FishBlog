<?php

$user = 'root';
$password = '';
$db = 'localhost';
$name = 'fishblog';

$link = new mysqli($db, $user, $password, $name);

if ($link->connect_error) {
    die('Ошибка подключения (' . $link->connect_errno . ') '
        . $link->connect_error);
}