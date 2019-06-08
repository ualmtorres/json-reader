<?php
/*
$url = 'http://json/index.php'; // path to your JSON file
echo 'Llamando a ' . $url;

$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
echo "<h1>Hola " . $characters->nombre . "</h1>";
*/

       // create curl resource
        $ch = curl_init();
 
        // set url
        //curl_setopt($ch, CURLOPT_URL, "http://localhost/json-producer");
        curl_setopt($ch, CURLOPT_URL, "json");
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
 
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
        // $output contains the output string
        $output = json_decode(curl_exec($ch), true);

        echo "Hola " . $output["nombre"];
        // close curl resource to free up system resources
        curl_close($ch);  

?>