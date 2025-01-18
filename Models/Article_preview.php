<?php

include_once 'components/error.php';

include_once 'components/config.php';

$query = "SELECT * FROM `sections` ORDER BY ID DESC LIMIT 5";

$result = $link->query($query);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    foreach ($row as $value) {
        echo $value;
        echo '<br>';
    }
    $e = $row['ID'];

    echo "<p><a href= http://fishing_blog_procedure/index.php?r=$e>Читать далее...</a></p>";
    echo "<br>";
}

$link->close();
