<?php

/**
 * @author https://github.com/amferraz
 * 
 * For API info, refer to:
 * http://tinysong.com/api
 */
require_once '../src/tinysong.php';

$api_key = 'YOUR_TINYSONG_API_KEY';

$query = 'carlinhos brown ararinha';


$tinysong = new Tinysong($api_key);


$result = $tinysong
            ->search($query)
            ->execute();


echo "<pre>";
print_r($result);
echo "</pre>";
?>