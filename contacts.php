<?php

echo"<a href='../'>Home</a><br>";
echo "<h1>Store Owner</h1><br>";

foreach(file("file/contacts.txt") as $line){	
    $arr = explode(' ',trim($line));
    echo"<div>{$line}</div>";
}
?>
