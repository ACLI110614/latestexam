<?php
// create a new cURL resource
$varSearch = $_POST['search'];
     
$ch = curl_init(); 
$apikey = "g2d25zbkfd5kvf8d72zuq4gu";
// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=".$apikey."&q=".$varSearch."&page_limit=");
curl_setopt($ch, CURLOPT_HEADER, 0);
// grab URL and pass it to the browser
//curl_exec($ch);
curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
?>
