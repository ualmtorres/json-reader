<?php
$url = 'http://json/index.php'; // path to your JSON file
echo 'Llamando a ' + $url;
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
echo "<h1>Hola " . $characters->nombre . "</h1>";
?>