<?php

require __DIR__ . '/../vendor/autoload.php';

use \Firebase\JWT\JWT;

$publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC8kGa1pSjbSYZVebtTRBLxBz5H
4i2p/llLCrEeQhta5kaQu/RnvuER4W8oDH3+3iuIYW4VQAzyqFpwuzjkDI+17t5t
0tyazyZ8JXw+KgXTxldMPEL95+qVhgXvwtihXC1c5oGbRlEDvDF6Sa53rcFVsYJ4
ehde/zUxo6UvS7UrBQIDAQAB
-----END PUBLIC KEY-----
EOD;


$jwt = <<<EOD
eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzUxMiJ9.eyJpc3MiOiJzaWxseWNhdC5vcmciLCJhdWQiOiJ5aXlpa2FuZy5jb20iLCJpYXQiOjEzNTY5OTk1MjQsIm5iZiI6MTM1NzAwMDAwMH0.i42BeLvR6nM18tPVAGhEYftANOKIvTfs44lKR1WJlh8H-yWeM0g-eQui9sE77Bso8D7xWY1MLIv4zdY8YuSot5szSEZ9O3Y2iea6UtEX89WkSTzZHxnve8Ev9WIx38_YaITGeRvuTHkQNq-4V6A7v2CGAul02jPM2mZCQQenoF8
EOD;

$decoded = JWT::decode($jwt, $publicKey, array('RS512'));

/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;
echo "Decode:\n" . print_r($decoded_array, true) . "\n";
?>
