<?php
if (isset($_GET['name'])){
  $curl = curl_init();
  $curl_setopt($curl, CURLOPT_RETURNTRANSFER. 1);
  
  $name_to_search = htmlentities(strtolower($_GET['name']));


  $ts = time();
  $public_key = 'c2be6028db99ef63108939ee427881d051514553';
  $private_key = '301c1f60ac74082c6c8342e5538109c5';
  $hash = md5($ts . $private_key. $public_key);

  



$query = array(
  "name" =>$name_to_search,
  "orderby" => "name",
  "limit" => "40",
  'apikey' => $public_key,
  'ts' => $ts,
  'hash' => $hash
);

  $comic_url = 'https://gateway.marvel.com:443/v1/public/characters?' .http_build_query($query);
  
  $curl_setopt($curl, $comic_url);
  
  
  $result = json_decode (curl_exec($curl), true);

  $curl_close();

  echo json_encode($result);

} else {
  echo "Error: Add Name...";

}



?>