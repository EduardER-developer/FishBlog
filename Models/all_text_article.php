<?php
$a = $_GET["r"];
require_once 'components/config.php';
$query = "SELECT * FROM `sections` Where `ID` = $a";
$result = mysqli_query($link, $query); 
while ($row = mysqli_fetch_assoc($result))
{     
     echo "<br>";
    foreach($row as $value)
        {
        echo $value;
         echo "<br>";
           echo "<br>";
             echo "<br>";
        }
              }  