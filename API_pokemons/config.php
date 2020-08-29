<?php
$url = "https://www.canalti.com.br/api/pokemons.json";

// Com cURL
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $pokemons = json_decode(curl_exec($ch));

$response = file_get_contents($url);
$pokemons = json_decode($response, true);

// echo "<pre>";
// print_r($pokemons);
