<?php

include_once 'components/error.php';

include_once 'components/config.php';

$query = "SELECT * FROM `sections` ORDER BY `id` DESC LIMIT 5";

$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $value) {
        echo $value;
        echo '<br>';
    }
    $e = $row['id'];

    echo "<p><a href= /fishblog/index.php?r=$e>Читать далее...</a></p>";
    echo "<br>";
}

$link->close();
