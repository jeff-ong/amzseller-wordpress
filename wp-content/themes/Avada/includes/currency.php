<?php

if ($_SERVER['REQUEST_METHOD']==="GET") {
    $apiKey = "86bbf033ebb1cd4ed758236324ffcbb3";
    $base_url = "https://api.exchangeratesapi.io/latest";
    $base = "CNY";
    $symbols = "USD,CAD,GBP,EUR";

    $url = $base_url.'?base='.$base.'&symbols='.$symbols;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ));

    $resp = curl_exec($curl);
    curl_close($curl);

    echo $resp;
}
?>

