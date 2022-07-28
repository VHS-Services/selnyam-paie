<?php

$url = "https://dev.api.uboraweb.com/entities/wordpress/saei";
$xml = file_get_contents($url);
$results = json_decode($xml);
?>