<?php

require __DIR__ . '/../vendor/autoload.php';

use \Firebase\JWT\JWT;

$publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCy5d2EZ7CPGTJQRfRf52i6Oyo2T+lUcFPirag8kcBwVDZ9j1IVNUWqDg4i61nBSe2sBei8zWdyua3wq67d9SyeqRIDLdYPtPUoZRaMnFPQxpNlEQQ3N2Vohpt4kdfVMhc6Y1bhn20L7K962H76RyrJ2ppN1hLt2Rs5uuG2PdOSbQIDAQAB
-----END PUBLIC KEY-----
EOD;


$jwt = <<<EOD
eyJhbGciOiJSUzUxMiJ9.eyJyb2xlIjoidXNlciIsImNyZWF0ZWQiOjE1NTY4MzgxNjUyNTksImlkIjoieWl5aWthbmciLCJlbWFpbCI6InlpeWlrYW5ncmFjaGVsQGdtYWlsLmNvbSJ9.lYFXMoaqK3BRSyvMdu7HqSv6RwkNNvW3cIhyQ3sL47RjKjo5P2exQ6X43SJXl0bexn4BqXRCcWwjk2vhk8WbfqIxj0nK01WODuU6LD8SmxJVx81pX3wPhZBlyDt8DaQ1Eh0nl50mvzc6nJP4cm6-Hlen_B3XSCH_kUHk60DL3vg
EOD;

$decoded = JWT::decode($jwt, $publicKey, array('RS512'));

/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;
echo "Decode:\n" . print_r($decoded_array, true) . "\n";
?>
