<?php

/**
 * @author https://github.com/amferraz
 * 
 * For API info, refer to:
 * http://tinysong.com/api
 */
require_once '../src/tinysong.php';

$api_key = 'YOU_TINYSONG_API_KEY';

$query = 'john mayer slow dancing in a burning room';


$tinysong = new Tinysong($api_key);


$result = $tinysong->single_tinysong_metadata($query)
        ->execute();


echo "<pre>";
print_r($var);
echo "</pre>";
?>