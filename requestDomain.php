<?php

$urlRequest = "rosecityvinyl"
$urlExtenstion = ".com"

$xml = file_get_contents("https://api.godaddy.com/v1/domains/available?domain=".$urlRequest.$urlExtenstion);

print_r($xml);

 ?>