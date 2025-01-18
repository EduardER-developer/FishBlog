<?php
require_once 'components/config.php';

$a = $_GET["r"];
$query = "SELECT * FROM `sections` Where `id` = $a";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    $name_title = $row['name'];
    foreach ($row as $value) {
        echo $value;
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
}
