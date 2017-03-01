/*http://api.icndb.com/jokes/random/*/

<?php

$post = array(
    'login' => '24933163000195',
    'senha' => 'CE1343',
    'cidade' => '8167',
    'f1' => 'http://api.icndb.com/jokes/random/'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.raryson.tk/nfe-import.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$data = curl_exec($ch);
$data = utf8_encode($data);

var_dump($data);
