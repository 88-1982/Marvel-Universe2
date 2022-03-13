<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
if (isset($_GET['character-id'])) {
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $character_id = $_GET['character-id'];

  $ts = time();
  $public_key = '301c1f60ac74082c6c8342e5538109c5';
  $private_key = 'c2be6028db99ef63108939ee427881d051514553
  ';
  $hash = md5($ts . $private_key . $public_key);

  $query = array(
  'format' => 'comic',
  'formatType' => 'comic',
  'apikey' => $public_key,
  'ts' => $ts,
  'hash' => $hash,
  );

  curl_setopt($curl, CURLOPT_URL,
  "https://gateway.marvel.com:443/v1/public/characters/" . $character_id . "/comics" . "?" . http_build_query($query)
  );

  $result = json_decode(curl_exec($curl), true);

  curl_close($curl);

  echo json_encode($result);

} else {
  echo "Character Id not defined";
}
} else {
echo "Error: wrong server.";
}
?>